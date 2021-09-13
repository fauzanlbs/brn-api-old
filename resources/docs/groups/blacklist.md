# BlackList


## Mendapatkan list data blacklist.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/perpetrators?search=Tasik&page[number]=1&page[size]=2&sort=created_at&filter[name]=Arya&filter[nik]=123123123&filter[created_at]=2020-12-24" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/perpetrators"
);

let params = {
    "search": "Tasik",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[name]": "Arya",
    "filter[nik]": "123123123",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    'https://api-brn.neosantara.co.id/api/perpetrators',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Tasik',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[name]'=> 'Arya',
            'filter[nik]'=> '123123123',
            'filter[created_at]'=> '2020-12-24',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-perpetrators" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-perpetrators"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-perpetrators"></code></pre>
</div>
<div id="execution-error-GETapi-perpetrators" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-perpetrators"></code></pre>
</div>
<form id="form-GETapi-perpetrators" data-method="GET" data-path="api/perpetrators" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-perpetrators', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-perpetrators" onclick="tryItOut('GETapi-perpetrators');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-perpetrators" onclick="cancelTryOut('GETapi-perpetrators');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-perpetrators" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/perpetrators</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-perpetrators" data-component="query"  hidden>
<br>
Mencari data daerah.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-perpetrators" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-perpetrators" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-perpetrators" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-perpetrators" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nama.
</p>
<p>
<b><code>filter[nik]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nik]" data-endpoint="GETapi-perpetrators" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nik.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-perpetrators" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>


## Mendapatkan detail data blacklist.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/perpetrators/1" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/perpetrators/1"
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
    'https://api-brn.neosantara.co.id/api/perpetrators/1',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-perpetrators--perpetrator-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-perpetrators--perpetrator-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-perpetrators--perpetrator-"></code></pre>
</div>
<div id="execution-error-GETapi-perpetrators--perpetrator-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-perpetrators--perpetrator-"></code></pre>
</div>
<form id="form-GETapi-perpetrators--perpetrator-" data-method="GET" data-path="api/perpetrators/{perpetrator}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-perpetrators--perpetrator-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-perpetrators--perpetrator-" onclick="tryItOut('GETapi-perpetrators--perpetrator-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-perpetrators--perpetrator-" onclick="cancelTryOut('GETapi-perpetrators--perpetrator-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-perpetrators--perpetrator-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/perpetrators/{perpetrator}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>perpetrator</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="perpetrator" data-endpoint="GETapi-perpetrators--perpetrator-" data-component="url" required  hidden>
<br>
valid id perpetrator.
</p>
</form>



