<?php

namespace Rasb14\T100;

/**
 * Collects and generates histogram data.
 */
class Histogram
{
    /**
     * @var array $sequence The numbers stored in sequence.
     * @var int $min The lowest possible number.
     * @var int $max The highest possible number.
     */
    private $sequence = [];
    private $min;
    private $max;

    /**
     * Get the sequence.
     *
     * @return array as the sequence.
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Gets the sequence sorted from the minimum value to the maximum value.
     *
     * @return array as the sorted sequence.
     */
    public function getSortedSequence()
    {
        $result = [];
        for ($i = $this->min; $i <= $this->max; $i++) {
            $result += [$i => 0];
        }

        foreach ($this->sequence as $value) {
            if (isset($result[$value])) {
                $result[$value]++;
            }
        }

        return $result;
    }

    /**
     * Gets the html representation of the histogram.
     *
     * @return string as html ul list representing the histogram.
     */
    public function getHtml()
    {
        $sortedSequence = $this->getSortedSequence();

        $result = '<ul class="histogramList">';
        foreach ($sortedSequence as $key => $value) {
            $result .= '<li>' . $key . '. ';
            for ($i = 0; $i < $value; $i++) {
                $result .= '*';
            }
            $result .= '</li>';
        }
        $result .= '</ul>';

        return $result;
    }

    /**
     * Inject the object to use as base for the histogram data.
     *
     * @param IHistogram $object The object holding the sequence.
     *
     * @return void.
     */
    public function injectData(IHistogram $object)
    {
        $this->sequence = $object->getHistogramSequence();
        $this->min = $object->getHistogramMin();
        $this->max = $object->getHistogramMax();
    }
}
