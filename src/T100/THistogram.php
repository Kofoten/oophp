<?php

namespace Rasb14\T100;

/**
 * Histogram trait implementing IHistogram.
 */
trait THistogram
{
    /**
     * @var array $sequence The numbers stored in sequence.
     */
    private $sequence = [];

    /**
     * Get the sequence.
     *
     * @return array as the sequence.
     */
    public function getHistogramSequence()
    {
        return $this->sequence;
    }

    /**
     * Gets the minimum value for the histogram.
     *
     * @return int as the minimum value.
     */
    public function getHistogramMin()
    {
        return 1;
    }

    /**
     * Gets the maximum value for the histogram.
     *
     * @return int as the maximum value.
     */
    public function getHistogramMax()
    {
        return max($this->sequence);
    }
}
