<?php
/**
 * This file is part of the DIS 2.0 PHP SDK of DPD Nederland B.V.
 *
 * Copyright (C) 2018  DPD Nederland B.V.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace DPDBenelux\SDK;

class DpdClient
{

    const DPD_SHIPMENT_SERVICE_URL = 'ShipmentService_2.1.wsdl';
    const DPD_PARCELSHOP_URL_POSTFIX = 'ParcelShopFinderService_2.1.wsdl';

    const DPD_LOGIN_SERVICE_URL = 'LoginService_2.1.wsdl';
    const DPD_AUTH_URL = 'https://dis.dpd.nl/Types/Shared/Authentication';
    const DPD_STAGING_SERVICE_URL = 'https://dis.dpd.nl/manual/wsdl/CustomerTest_';
    const DPD_LIVE_SERVICE_URL = 'https://dis.dpd.nl/manual/wsdl/Production_';

    protected $delisId;

    protected $delisPassword;

    protected $messageLanguage;

    protected $staging;

    protected $accessToken;

    /**
     * DPD constructor.
     * @param string $delisId
     * @param string $delisPassword
     * @param string $messageLanguage
     * @param bool $staging
     * @throws \Exception
     */
    public function __construct(
        $delisId,
        $delisPassword,
        $messageLanguage = 'nl_NL',
        $staging = false
    ) {
        $this->delisId = $delisId;
        $this->delisPassword = $delisPassword;
        $this->messageLanguage = $messageLanguage;
        $this->staging = $staging;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function login()
    {
        try {
            $client = $this->getSoapClient($this->getUrl(self::DPD_LOGIN_SERVICE_URL));
            $result = $client->Login(
                array(
                    'UserName' => $this->delisId,
                    'Password' => $this->delisPassword,
                    'MessageLanguage' => $this->messageLanguage
                )
            );
        } catch (\SoapFault $fs) {
            if (!empty($fs->detail->GeneralFault->ErrorMessage)) {
                throw new DpdLoginException($fs->detail->GeneralFault->ErrorMessage);
            }

            throw $fs;
        }

        $this->accessToken = $result->Token;

        return $result;
    }

    /**
     * @param string $token
     */
    public function setAccessToken($token)
    {
        $this->accessToken = $token;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param GetLabel $getLabel
     * @return mixed
     * @throws DpdShipmentException
     * @throws \Exception
     * @throws \SoapFault
     */
    public function generateLabel(GetLabel $getLabel)
    {
        $soapHeaderBody = array(
            'UserName' => $this->delisId,
            'Token' => $this->accessToken,
            'MessageLanguage' => $this->messageLanguage
        );

        $soapHeader = new \SoapHeader(self::DPD_AUTH_URL, 'Authentication', $soapHeaderBody, false);
        $client = $this->getSoapClient($this->getUrl(self::DPD_SHIPMENT_SERVICE_URL));
        $client->__setSoapHeaders($soapHeader);

        try {
            $result = $client->GetLabel($getLabel->toArray());
        } catch (\SoapFault $fs) {
            if (!empty($fs->detail->GeneralFault->ErrorMessage)) {
                throw new DpdLoginException($fs->detail->GeneralFault->ErrorMessage);
            }

            throw $fs;
        }

        return $result;
    }

    /**
     * @param \DPDBenelux\SDK\ParcelshopsByGeoData $parcelshopsByGeoData
     * @return mixed
     * @throws DpdParcelShopException
     * @throws \Exception
     * @throws \SoapFault
     */
    public function findParcelShopsByGeoData(\DPDBenelux\SDK\ParcelshopsByGeoData $parcelshopsByGeoData)
    {
        $url = $this->getUrl(self::DPD_PARCELSHOP_URL_POSTFIX);
        $soapClient = $this->getSoapClient($url);
        $soapHeaderBody = array(
            'UserName' => $this->delisId,
            'Token' => $this->accessToken,
            'MessageLanguage' => $this->messageLanguage
        );
        $header = new \SoapHeader(self::DPD_AUTH_URL, 'Authentication', $soapHeaderBody);
        $soapClient->__setSoapHeaders($header);

        try {
            $results = array();
            $response = $soapClient->__soapCall('FindParcelShopsByGeoData', array($parcelshopsByGeoData->toArray()));

            $parcelShops = $response->ParcelShops;
            foreach ($parcelShops->ParcelShop as $parcelShop) {
                $shop = new ParcelShop();

                $shop->setData($parcelShop);

                $results[] = $shop;
            }

            return $results;
        } catch (\SoapFault $fs) {
            if (!empty($fs->detail->GeneralFault->ErrorMessage)) {
                throw new DpdLoginException($fs->detail->GeneralFault->ErrorMessage);
            }

            throw $fs;
        }
    }

    /**
     * @param string $id
     * @return ParcelShop
     * @throws DpdParcelShopException
     * @throws \SoapFault
     */
    public function findParcelShopById($id)
    {
        $url = $this->getUrl(self::DPD_PARCELSHOP_URL_POSTFIX);
        $soapClient = $this->getSoapClient($url);
        $soapHeaderBody = array(
            'UserName' => $this->delisId,
            'Token' => $this->accessToken,
            'MessageLanguage' => $this->messageLanguage
        );
        $header = new \SoapHeader(self::DPD_AUTH_URL, 'Authentication', $soapHeaderBody);
        $soapClient->__setSoapHeaders($header);

        try {
            $response = $soapClient->__soapCall('FindParcelShopById', array(array('ParcelShopId' => $id)));

            $parcelShop = new ParcelShop();
            $parcelShop->setData($response->ParcelShop);

            return $parcelShop;
        } catch (\SoapFault $fs) {
            if (!empty($fs->detail->GeneralFault->ErrorMessage)) {
                throw new DpdLoginException($fs->detail->GeneralFault->ErrorMessage);
            }

            throw $fs;
        }
    }


    /**
     * @param string $serviceUrl
     * @return string
     */
    public function getUrl($serviceUrl)
    {
        if (!$this->staging) {
            return self::DPD_LIVE_SERVICE_URL . $serviceUrl;
        } else {
            return self::DPD_STAGING_SERVICE_URL . $serviceUrl;
        }
    }

    /**
     * @param string $url
     * @return \SoapClient
     * @throws \Exception
     */
    private function getSoapClient($url)
    {
        $tmpPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR;
        $md5Key = md5($url);
        $tmpFile = $tmpPath . $md5Key . '.wsdl';
        if (!file_exists($tmpFile)) {
            $curlClient = curl_init();
            curl_setopt($curlClient, CURLOPT_URL, $url);
            curl_setopt($curlClient, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curlClient);

            if (!$response) {
                throw new \Exception("Unable to get wsdl");
            }

            file_put_contents($tmpFile, $response);
        }

        $client = new \SoapClient($tmpFile, ['trace' => true]);

        return $client;
    }
}
