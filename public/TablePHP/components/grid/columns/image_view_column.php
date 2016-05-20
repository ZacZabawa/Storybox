<?php

class ImageViewColumn extends CustomViewColumn
{
    private $dataset;
    private $fieldName;
    private $imageHintTemplate;
    private $enablePictureZoom;
    private $handlerName;

    public function __construct($fieldName, $caption, $dataset, $enablePictureZoom = true, $handlerName)
    {
        parent::__construct($caption);
        $this->fieldName = $fieldName;
        $this->dataset = $dataset;
        $this->imageHintTemplate = null;
        $this->enablePictureZoom = $enablePictureZoom;
        $this->handlerName = $handlerName;
    }

    public function GetName()
    {
        return $this->fieldName;
    }

    /**
     * @return Dataset
     */
    public function GetDataset()
    {
        return $this->dataset;
    }

    public function GetData()
    {
        return $this->GetDataset()->GetFieldValueByName($this->fieldName);
    }

    public function GetValue()
    {
        return $this->GetData();
    }

    public function GetEnablePictureZoom()
    {
        return $this->enablePictureZoom;
    }

    public function SetEnablePictureZoom($value)
    {
        $this->enablePictureZoom = $value;
    }

    public function SetImageHintTemplate($value)
    {
        $this->imageHintTemplate = $value;
    }

    public function GetImageHintTemplate()
    {
        return $this->imageHintTemplate;
    }

    public function GetImageLink()
    {
        $result = $this->GetGrid()->CreateLinkBuilder();
        $result->AddParameter('hname', $this->handlerName);
        AddPrimaryKeyParameters($result, $this->GetDataset()->GetPrimaryKeyValues());

        return $result->GetLink();
    }

    public function GetFullImageLink()
    {
        $result = $this->GetGrid()->CreateLinkBuilder();
        $result->AddParameter('hname', $this->handlerName);
        $result->AddParameter('large', '1');
        AddPrimaryKeyParameters($result, $this->GetDataset()->GetPrimaryKeyValues());

        return $result->GetLink();
    }

    public function GetImageHint()
    {
        if (isset($this->imageHintTemplate)) {
            return FormatDatasetFieldsTemplate($this->dataset, $this->imageHintTemplate);
        } else {
            return $this->GetCaption();
        }
    }

    /**
     * @param Renderer $renderer
     * @return void
     */
    public function Accept($renderer)
    {
        $renderer->RenderImageViewColumn($this);
    }

    public function IsDataColumn()
    {
        return false;
    }
}