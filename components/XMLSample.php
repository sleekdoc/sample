<?php
namespace Daison\SleekDoc\Components;

/**
 * @sleekdoc_init
 * @sleekdoc_category XML
 * @sleekdoc_namespace Booking
 *
 * @description Description Here
 */
class XMLSample
{
    /**
     * @sleekdoc_init
     *
     * @name Details
     * @description This is shit
     * @raw_xml <?xml version="1.0" encoding="UTF-8"?>
     * <OTA_VehRetResRQ xmlns="http://www.opentravel.org/OTA/2003/05" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.opentravel.org/OTA/2003/05 OTA_VehRetResRQ.xsd" Target="Test" Version="1.0">
     *    <POS>
     *       <Source ISOCurrency="EUR">
     *          <RequestorID Type="16" ID="11111" ID_Context="VIR111" />
     *       </Source>
     *    </POS>
     *    <VehRetResRQCore>
     *       <UniqueID Type="15" ID="5168" />
     *    </VehRetResRQCore>
     * </OTA_VehRetResRQ>
     */
    public function indexAction()
    {
    }
}
