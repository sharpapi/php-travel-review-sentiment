![SharpAPI GitHub cover](https://sharpapi.com/sharpapi-github-laravel-bg.jpg "SharpAPI PHP Client")

# Travel Review Sentiment API for PHP

## ✈️ Analyze travel review sentiment using AI - POSITIVE/NEGATIVE/NEUTRAL scores

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharpapi/php-travel-review-sentiment.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-travel-review-sentiment)
[![Total Downloads](https://img.shields.io/packagist/dt/sharpapi/php-travel-review-sentiment.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-travel-review-sentiment)

Check the full documentation on the [Travel Review Sentiment API for PHP API](https://sharpapi.com/en/catalog/ai/travel-tourism-hospitality/travel-review-sentiment-checker) page.

---

## Quick Links

| Resource | Link |
|----------|------|
| **Main API Documentation** | [Authorization, Webhooks, Polling & More](https://documenter.getpostman.com/view/31106842/2s9Ye8faUp) |
| **Postman Documentation** | [View Docs](https://documenter.getpostman.com/view/31106842/2sBXVeGsVf) |
| **Product Details** | [SharpAPI.com](https://sharpapi.com/en/catalog/ai/travel-tourism-hospitality/travel-review-sentiment-checker) |
| **SDK Libraries** | [GitHub - SharpAPI SDKs](https://github.com/sharpapi) |

---

## Requirements

- PHP >= 8.0

---

## Installation

### Step 1. Install the package via Composer:

```bash
composer require sharpapi/php-travel-review-sentiment
```

### Step 2. Visit [SharpAPI](https://sharpapi.com/) to get your API key.

---
## Laravel Integration

Building a Laravel application? Check the Laravel package version for better integration.

---

## What it does

Analyze travel review sentiment using AI - POSITIVE/NEGATIVE/NEUTRAL scores

---

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use SharpAPI\TravelReviewSentiment\TravelReviewSentimentClient;
use GuzzleHttp\Exception\GuzzleException;

$apiKey = 'your_api_key_here';
$client = new TravelReviewSentimentClient(apiKey: $apiKey);

try {
    $statusUrl = $client->analyzeTravelReviewSentiment(
        content: 'Your text content here',
        language: 'English'
    );

    // Optional: Configure polling
    $client->setApiJobStatusPollingInterval(10);
    $client->setApiJobStatusPollingWait(180);

    // Fetch results (polls automatically)
    $result = $client->fetchResults($statusUrl);
    $resultData = $result->getResultJson();

    echo $resultData;
} catch (GuzzleException $e) {
    echo "API error: " . $e->getMessage();
}
```

---

## Example Response
```json

{
    "data": {
        "type": "api_job_result",
        "id": "f85b7ac5-33cd-4796-8935-dc8c22219946",
        "attributes": {
            "status": "success",
            "type": "tth_review_sentiment",
            "result": {
                "score": 95,
                "opinion": "POSITIVE"
            }
        }
    }
}

```
---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

---

## Credits

- [A2Z WEB LTD](https://github.com/a2zwebltd)
- [Dawid Makowski](https://github.com/makowskid)
- Boost your [PHP AI](https://sharpapi.com/) capabilities!

---

## License

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

## Social Media

🚀 For the latest news, tutorials, and case studies, don't forget to follow us on:
- [SharpAPI X (formerly Twitter)](https://x.com/SharpAPI)
- [SharpAPI YouTube](https://www.youtube.com/@SharpAPI)
- [SharpAPI Vimeo](https://vimeo.com/SharpAPI)
- [SharpAPI LinkedIn](https://www.linkedin.com/products/a2z-web-ltd-sharpapicom-automate-with-aipowered-api/)
- [SharpAPI Facebook](https://www.facebook.com/profile.php?id=61554115896974)
