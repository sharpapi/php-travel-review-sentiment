<?php

declare(strict_types=1);

namespace SharpAPI\TravelReviewSentiment;

use GuzzleHttp\Exception\GuzzleException;
use SharpAPI\Core\Client\SharpApiClient;

/**
 * Analyze travel review sentiment using AI - POSITIVE/NEGATIVE/NEUTRAL scores
 *
 * @package SharpAPI\TravelReviewSentiment
 * @api
 */
class TravelReviewSentimentClient extends SharpApiClient
{
    public function __construct(
        string $apiKey,
        ?string $apiBaseUrl = 'https://sharpapi.com/api/v1',
        ?string $userAgent = 'SharpAPIPHPTravelReviewSentiment/1.0.0'
    ) {
        parent::__construct($apiKey, $apiBaseUrl, $userAgent);
    }

    /**
     * Analyze travel review sentiment using AI - POSITIVE/NEGATIVE/NEUTRAL scores
     *
     * @param string $content The travel review content to analyze
     * @return string Status URL for polling the job result
     * @throws GuzzleException
     * @api
     */
    public function analyzeTravelReviewSentiment(string $content): string
    {
        $response = $this->makeRequest('POST', '/tth/review_sentiment', [
            'content' => $content
        ]);

        return $this->parseStatusUrl($response);
    }
}
