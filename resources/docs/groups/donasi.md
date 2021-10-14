# Donasi


## Mendapatkan list data donasi yang tersedia.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/donations?search=Berita+hari+ini&page[number]=1&page[size]=2&sort=created_at&filter[title]=Berita+hari+ini&filter[created_at]=2020-12-24&filter[donated_at]=2020-12-24" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/donations"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[title]": "Berita hari ini",
    "filter[created_at]": "2020-12-24",
    "filter[donated_at]": "2020-12-24",
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
    'https://api-brn.neosantara.co.id/api/donations',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Berita hari ini',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[title]'=> 'Berita hari ini',
            'filter[created_at]'=> '2020-12-24',
            'filter[donated_at]'=> '2020-12-24',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "title": "Donasi untuk orang kurang mampu.",
            "description": null,
            "value_target": 1000000,
            "image": null,
            "donated_at": "2021-05-25T14:43:19.000000Z",
            "donation_user_count": 10,
            "donation_user_sum_nominal": "511637",
            "created_at": "2021-05-24T14:43:19.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/donations?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/donations",
        "per_page": 15,
        "to": 1
    }
}
```
<div id="execution-results-GETapi-donations" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-donations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-donations"></code></pre>
</div>
<div id="execution-error-GETapi-donations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-donations"></code></pre>
</div>
<form id="form-GETapi-donations" data-method="GET" data-path="api/donations" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-donations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-donations" onclick="tryItOut('GETapi-donations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-donations" onclick="cancelTryOut('GETapi-donations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-donations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/donations</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-donations" data-component="query"  hidden>
<br>
Mencari data artikel.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-donations" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-donations" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-donations" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-donations" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-donations" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[donated_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[donated_at]" data-endpoint="GETapi-donations" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal akan di donasikan.
</p>
</form>



