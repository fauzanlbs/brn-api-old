# Laporan eksekusi kasus


## Menambahkan eksekusi laporan kasus pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menambahkan laporan eksekusi kasus pengguna saat ini.

> Example request:

```bash
curl -X POST \
    "https://sisko.anggawebs.com/api/case-report-executions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"case_report_id":16,"koordinator_user_id":5,"korda_yang_menangani":2,"perpetrator_id":15,"status":"assumenda","uraian_singkat":"et"}'

```

```javascript
const url = new URL(
    "https://sisko.anggawebs.com/api/case-report-executions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "case_report_id": 16,
    "koordinator_user_id": 5,
    "korda_yang_menangani": 2,
    "perpetrator_id": 15,
    "status": "assumenda",
    "uraian_singkat": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://sisko.anggawebs.com/api/case-report-executions',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'case_report_id' => 16,
            'koordinator_user_id' => 5,
            'korda_yang_menangani' => 2,
            'perpetrator_id' => 15,
            'status' => 'assumenda',
            'uraian_singkat' => 'et',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "message": "..."
}
```
<div id="execution-results-POSTapi-case-report-executions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-case-report-executions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-case-report-executions"></code></pre>
</div>
<div id="execution-error-POSTapi-case-report-executions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-case-report-executions"></code></pre>
</div>
<form id="form-POSTapi-case-report-executions" data-method="POST" data-path="api/case-report-executions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-case-report-executions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-case-report-executions" onclick="tryItOut('POSTapi-case-report-executions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-case-report-executions" onclick="cancelTryOut('POSTapi-case-report-executions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-case-report-executions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/case-report-executions</code></b>
</p>
<p>
<label id="auth-POSTapi-case-report-executions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-case-report-executions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>case_report_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="case_report_id" data-endpoint="POSTapi-case-report-executions" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>koordinator_user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="koordinator_user_id" data-endpoint="POSTapi-case-report-executions" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>korda_yang_menangani</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="korda_yang_menangani" data-endpoint="POSTapi-case-report-executions" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>perpetrator_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perpetrator_id" data-endpoint="POSTapi-case-report-executions" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="status" data-endpoint="POSTapi-case-report-executions" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>uraian_singkat</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="uraian_singkat" data-endpoint="POSTapi-case-report-executions" data-component="body"  hidden>
<br>

</p>

</form>



