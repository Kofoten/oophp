<?php

namespace Rasb14\T100;

/**
 * IHistogram, Interface for histogram reports.
 */
interface IHistogram
{
    /**
     * Get the sequence.
     *
     * @return array as the sequence.
     */
    public function getHistogramSequence();

    /**
     * Gets the minimum value for the histogram.
     *
     * @return int as the minimum value.
     */
    public function getHistogramMin();

    /**
     * Gets the maximum value for the histogram.
     *
     * @return int as the maximum value.
     */
    public function getHistogramMax();
}
