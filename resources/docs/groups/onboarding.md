# Onboarding


## Mendapatkan list data onboarding.




> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/onboardings" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/onboardings"
);

let headers = {
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://brn-api.test/api/onboardings',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-onboardings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-onboardings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-onboardings"></code></pre>
</div>
<div id="execution-error-GETapi-onboardings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-onboardings"></code></pre>
</div>
<form id="form-GETapi-onboardings" data-method="GET" data-path="api/onboardings" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-onboardings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-onboardings" onclick="tryItOut('GETapi-onboardings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-onboardings" onclick="cancelTryOut('GETapi-onboardings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-onboardings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/onboardings</code></b>
</p>
</form>



