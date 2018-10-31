<?php

class Box {
    /**
     * @var double
     */
    private $length;
    /**
     * @var double
     */
    private $width;
    /**
     * @var double
     */
    private $height;

    /**
     * Box constructor.
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * Box constructor.
     * @param float $length
     * @param float $width
     * @param float $height


    /**
     * @param float $length
     */




    public function setLength(float $length): void
    {
        if($length <=0) {
            throw new Exception('Length cannot be zero or negative.');
        }
        $this->length = $length;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        if($width <=0) {
            throw new Exception('Width cannot be zero or negative.');
        }
        $this->width = $width;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        if($height <=0) {
            throw new Exception('Height cannot be zero or negative.');
        }
        $this->height = $height;
    }

    public function getSurface():float {
        return  2 * $this->height * $this->length +
               2 * $this->height * $this->width +
               2 * $this->width * $this->length;
    }

    public function getLateralSurface():float {
        return  2 * $this->height * $this->length +
            2 * $this->height * $this->width;
    }

    public function getVolume():float  {
        return $this->length * $this->height * $this->width;
    }

}