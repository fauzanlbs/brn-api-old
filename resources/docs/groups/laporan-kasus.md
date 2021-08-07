# Laporan kasus


## Mendapatkan list data laporan kasus.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa mendapatkan list data laporan kasus.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/case-reports?search=Avansa&page[number]=1&page[size]=2&sort=created_at&include=maxime&filter[status]=pending&filter[request_delete]=1&filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/case-reports"
);

let params = {
    "search": "Avansa",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "include": "maxime",
    "filter[status]": "pending",
    "filter[request_delete]": "1",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
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
    'https://brn-api.test/api/case-reports',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Avansa',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'include'=> 'maxime',
            'filter[status]'=> 'pending',
            'filter[request_delete]'=> '1',
            'filter[created_at]'=> '2020-12-24',
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
            "id": 3,
            "user_id": 1,
            "car_id": 1,
            "in_charge_id": null,
            "latitude": 31.25,
            "longitude": 29.9,
            "chronology": "quo",
            "status": "pending",
            "request_delete": false,
            "created_at": "2021-05-07T15:18:57.000000Z",
            "updated_at": "2021-05-07T15:18:57.000000Z",
            "perpetrator": {
                "id": 3,
                "case_report_id": 3,
                "nik": "123123123213123123123123",
                "name": "Arya",
                "phone_number": "08213123123",
                "address": "Jalan letkol",
                "profile_photo_path": "perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg",
                "information": "asdasdasd",
                "created_at": "2021-05-07T15:18:57.000000Z",
                "updated_at": "2021-05-07T15:18:57.000000Z",
                "profile_photo_url": "http:\/\/api.brn.com\/storage\/perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/my-case-report?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/my-case-report?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/my-case-report",
        "per_page": 15,
        "to": 15
    }
}
```
<div id="execution-results-GETapi-case-reports" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-case-reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-case-reports"></code></pre>
</div>
<div id="execution-error-GETapi-case-reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-case-reports"></code></pre>
</div>
<form id="form-GETapi-case-reports" data-method="GET" data-path="api/case-reports" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-case-reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-case-reports" onclick="tryItOut('GETapi-case-reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-case-reports" onclick="cancelTryOut('GETapi-case-reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-case-reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/case-reports</code></b>
</p>
<p>
<label id="auth-GETapi-case-reports" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-case-reports" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Mencari data laporan kasus.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Include akan memuat relasi, relasi yang tersedia:
<br> #1 <b>in-charge</b> : Penanggung jawab kasus. <br> #1 <b>car</b> : Mobil, Anda bisa mengabukannya dengan (<i>car-make</i>, <i>car-type</i>, <i>car-fuel</i>, <i>car-model</i>, <i>car-color</i>, <i>car-images</i>). contoh car.car-color. <br> #1 <b>perpetrator</b> : tersangka.
</p>
<p>
<b><code>filter[status]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[status]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan status (pending, verified, progress, completed).
</p>
<p>
<b><code>filter[request_delete]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[request_delete]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan permintaan pembatalan kasus (1=true 0=false).
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>


## Mendapatkan list data laporan kasus pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa mendapatkan list data laporan kasus pengguna saat ini.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/my-case-reports?search=Avansa&page[number]=1&page[size]=2&sort=created_at&include=quisquam&filter[status]=pending&filter[request_delete]=1&filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-case-reports"
);

let params = {
    "search": "Avansa",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "include": "quisquam",
    "filter[status]": "pending",
    "filter[request_delete]": "1",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
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
    'https://brn-api.test/api/my-case-reports',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Avansa',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'include'=> 'quisquam',
            'filter[status]'=> 'pending',
            'filter[request_delete]'=> '1',
            'filter[created_at]'=> '2020-12-24',
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
            "id": 3,
            "user_id": 1,
            "car_id": 1,
            "in_charge_id": null,
            "latitude": 31.25,
            "longitude": 29.9,
            "chronology": "quo",
            "status": "pending",
            "request_delete": false,
            "created_at": "2021-05-07T15:18:57.000000Z",
            "updated_at": "2021-05-07T15:18:57.000000Z",
            "perpetrator": {
                "id": 3,
                "case_report_id": 3,
                "nik": "123123123213123123123123",
                "name": "Arya",
                "phone_number": "08213123123",
                "address": "Jalan letkol",
                "profile_photo_path": "perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg",
                "information": "asdasdasd",
                "created_at": "2021-05-07T15:18:57.000000Z",
                "updated_at": "2021-05-07T15:18:57.000000Z",
                "profile_photo_url": "http:\/\/api.brn.com\/storage\/perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/my-case-report?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/my-case-report?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/my-case-report",
        "per_page": 15,
        "to": 15
    }
}
```
<div id="execution-results-GETapi-my-case-reports" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-case-reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-case-reports"></code></pre>
</div>
<div id="execution-error-GETapi-my-case-reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-case-reports"></code></pre>
</div>
<form id="form-GETapi-my-case-reports" data-method="GET" data-path="api/my-case-reports" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-case-reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-case-reports" onclick="tryItOut('GETapi-my-case-reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-case-reports" onclick="cancelTryOut('GETapi-my-case-reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-case-reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-case-reports</code></b>
</p>
<p>
<label id="auth-GETapi-my-case-reports" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-case-reports" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Mencari data laporan kasus pengguna saat ini.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Include akan memuat relasi, relasi yang tersedia:
<br> #1 <b>in-charge</b> : Penanggung jawab kasus. <br> #1 <b>car</b> : Mobil, Anda bisa mengabukannya dengan (<i>car-make</i>, <i>car-type</i>, <i>car-fuel</i>, <i>car-model</i>, <i>car-color</i>, <i>car-images</i>). contoh car.car-color. <br> #1 <b>perpetrator</b> : tersangka.
</p>
<p>
<b><code>filter[status]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[status]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan status (pending, verified, progress, completed).
</p>
<p>
<b><code>filter[request_delete]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[request_delete]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan permintaan pembatalan kasus (1=true 0=false).
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-case-reports" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>


## Mendapatkan detail data laporan kasus pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/my-case-reports/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-case-reports/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
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
    'https://brn-api.test/api/my-case-reports/1',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": {
        "id": 3,
        "user_id": 1,
        "car_id": 1,
        "in_charge_id": null,
        "latitude": 31.25,
        "longitude": 29.9,
        "chronology": "quo",
        "status": "pending",
        "request_delete": false,
        "created_at": "2021-05-07T15:18:57.000000Z",
        "updated_at": "2021-05-07T15:18:57.000000Z",
        "perpetrator": {
            "id": 3,
            "case_report_id": 3,
            "nik": "123123123213123123123123",
            "name": "Arya",
            "phone_number": "08213123123",
            "address": "Jalan letkol",
            "profile_photo_path": "perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg",
            "information": "asdasdasd",
            "created_at": "2021-05-07T15:18:57.000000Z",
            "updated_at": "2021-05-07T15:18:57.000000Z",
            "profile_photo_url": "http:\/\/api.brn.com\/storage\/perpetrator\/yhSiQ9xZyU1iwULR2qwM4ApduYc899NQOevRDB4H.jpg"
        }
    },
    "message": "Berhasil menambahkan laporan kasus."
}
```
<div id="execution-results-GETapi-my-case-reports--caseReport-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-case-reports--caseReport-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-case-reports--caseReport-"></code></pre>
</div>
<div id="execution-error-GETapi-my-case-reports--caseReport-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-case-reports--caseReport-"></code></pre>
</div>
<form id="form-GETapi-my-case-reports--caseReport-" data-method="GET" data-path="api/my-case-reports/{caseReport}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-case-reports--caseReport-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-case-reports--caseReport-" onclick="tryItOut('GETapi-my-case-reports--caseReport-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-case-reports--caseReport-" onclick="cancelTryOut('GETapi-my-case-reports--caseReport-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-case-reports--caseReport-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-case-reports/{caseReport}</code></b>
</p>
<p>
<label id="auth-GETapi-my-case-reports--caseReport-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-case-reports--caseReport-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>caseReport</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="caseReport" data-endpoint="GETapi-my-case-reports--caseReport-" data-component="url" required  hidden>
<br>
valid id caseReport.
</p>
</form>


## Menambahkan laporan kasus pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menambahkan laporan kasus pengguna saat ini.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/my-case-reports" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d ''

```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-case-reports"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = 

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://brn-api.test/api/my-case-reports',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'car_id' => 1,
            'location' => '31.2467601,29.9020376',
            'chronology' => 'repellat',
            'perpetrator' => [
                'nik' => 123123123,
                'name' => 'Arya Anggara',
                'phone_number' => '0821123213',
                'address' => 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia',
                'photo' => null,
                'information' => 'aliquid',
            ],
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
<div id="execution-results-POSTapi-my-case-reports" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-my-case-reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-my-case-reports"></code></pre>
</div>
<div id="execution-error-POSTapi-my-case-reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-my-case-reports"></code></pre>
</div>
<form id="form-POSTapi-my-case-reports" data-method="POST" data-path="api/my-case-reports" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-my-case-reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-my-case-reports" onclick="tryItOut('POSTapi-my-case-reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-my-case-reports" onclick="cancelTryOut('POSTapi-my-case-reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-my-case-reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/my-case-reports</code></b>
</p>
<p>
<label id="auth-POSTapi-my-case-reports" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-my-case-reports" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>car_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car_id" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
valid id <b>car</b>.
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="location" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
lokasi (lat, long).
</p>
<p>
<b><code>chronology</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="chronology" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
kronologi.
</p>
<p>
<details>
<summary>
<b><code>perpetrator</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
Pelaku.
</summary>
<br>
<p>
<b><code>perpetrator.nik</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="perpetrator.nik" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
NIK.
</p>
<p>
<b><code>perpetrator.name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator.name" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
Nama lengkap.
</p>
<p>
<b><code>perpetrator.phone_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator.phone_number" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
nomor telepon.
</p>
<p>
<b><code>perpetrator.address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator.address" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
Alamat lengkap.
</p>
<p>
<b><code>perpetrator.photo</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="perpetrator.photo" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
file berupa gambar.
</p>
<p>
<b><code>perpetrator.information</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator.information" data-endpoint="POSTapi-my-case-reports" data-component="body" required  hidden>
<br>
informasi tambahan.
</p>
</details>
</p>

</form>


## Batalkan laporan kasus pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa membuat permintaan pembatalan laporan kasus CaseReportController.
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>

> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/my-case-reports/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-case-reports/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://brn-api.test/api/my-case-reports/1',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
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
<div id="execution-results-DELETEapi-my-case-reports--caseReport-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-my-case-reports--caseReport-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-my-case-reports--caseReport-"></code></pre>
</div>
<div id="execution-error-DELETEapi-my-case-reports--caseReport-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-my-case-reports--caseReport-"></code></pre>
</div>
<form id="form-DELETEapi-my-case-reports--caseReport-" data-method="DELETE" data-path="api/my-case-reports/{caseReport}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-my-case-reports--caseReport-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-my-case-reports--caseReport-" onclick="tryItOut('DELETEapi-my-case-reports--caseReport-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-my-case-reports--caseReport-" onclick="cancelTryOut('DELETEapi-my-case-reports--caseReport-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-my-case-reports--caseReport-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/my-case-reports/{caseReport}</code></b>
</p>
<p>
<label id="auth-DELETEapi-my-case-reports--caseReport-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-my-case-reports--caseReport-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>caseReport</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="caseReport" data-endpoint="DELETEapi-my-case-reports--caseReport-" data-component="url" required  hidden>
<br>
valid id caseReport. Defaults to 'id'.
</p>
</form>


## Menambahkan Pelaku.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/perpetrators" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: multipart/form-data" \
    -F "case_report_id=1" \
    -F "nik=123123123" \
    -F "name=Arya Anggara" \
    -F "phone_number=0821123213" \
    -F "address=Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia" \
    -F "information=ut" \
    -F "photo=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpvMT3qD" 
```

```javascript
const url = new URL(
    "https://brn-api.test/api/perpetrators"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "multipart/form-data",
};

const body = new FormData();
body.append('case_report_id', '1');
body.append('nik', '123123123');
body.append('name', 'Arya Anggara');
body.append('phone_number', '0821123213');
body.append('address', 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia');
body.append('information', 'ut');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://brn-api.test/api/perpetrators',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'case_report_id',
                'contents' => '1'
            ],
            [
                'name' => 'nik',
                'contents' => '123123123'
            ],
            [
                'name' => 'name',
                'contents' => 'Arya Anggara'
            ],
            [
                'name' => 'phone_number',
                'contents' => '0821123213'
            ],
            [
                'name' => 'address',
                'contents' => 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia'
            ],
            [
                'name' => 'information',
                'contents' => 'ut'
            ],
            [
                'name' => 'photo',
                'contents' => fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpvMT3qD', 'r')
            ],
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
<div id="execution-results-POSTapi-perpetrators" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-perpetrators"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-perpetrators"></code></pre>
</div>
<div id="execution-error-POSTapi-perpetrators" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-perpetrators"></code></pre>
</div>
<form id="form-POSTapi-perpetrators" data-method="POST" data-path="api/perpetrators" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"multipart\/form-data"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-perpetrators', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-perpetrators" onclick="tryItOut('POSTapi-perpetrators');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-perpetrators" onclick="cancelTryOut('POSTapi-perpetrators');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-perpetrators" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/perpetrators</code></b>
</p>
<p>
<label id="auth-POSTapi-perpetrators" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-perpetrators" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>case_report_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="case_report_id" data-endpoint="POSTapi-perpetrators" data-component="body"  hidden>
<br>
valid id <b>case_report</b>.
</p>
<p>
<b><code>nik</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="nik" data-endpoint="POSTapi-perpetrators" data-component="body" required  hidden>
<br>
NIK.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-perpetrators" data-component="body" required  hidden>
<br>
Nama lengkap.
</p>
<p>
<b><code>phone_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone_number" data-endpoint="POSTapi-perpetrators" data-component="body" required  hidden>
<br>
nomor telepon.
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-perpetrators" data-component="body" required  hidden>
<br>
Alamat lengkap.
</p>
<p>
<b><code>photo</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="photo" data-endpoint="POSTapi-perpetrators" data-component="body" required  hidden>
<br>
file berupa gambar
</p>
<p>
<b><code>information</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="information" data-endpoint="POSTapi-perpetrators" data-component="body" required  hidden>
<br>
informasi tambahan.
</p>

</form>


## Memperbaharui salah satu data pelaku.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/perpetrators/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: multipart/form-data" \
    -F "case_report_id=1" \
    -F "nik=123123123" \
    -F "name=Arya Anggara" \
    -F "phone_number=0821123213" \
    -F "address=Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia" \
    -F "information=possimus" \
    -F "photo=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/php8hdaEg" 
```

```javascript
const url = new URL(
    "https://brn-api.test/api/perpetrators/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "multipart/form-data",
};

const body = new FormData();
body.append('case_report_id', '1');
body.append('nik', '123123123');
body.append('name', 'Arya Anggara');
body.append('phone_number', '0821123213');
body.append('address', 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia');
body.append('information', 'possimus');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://brn-api.test/api/perpetrators/1',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'case_report_id',
                'contents' => '1'
            ],
            [
                'name' => 'nik',
                'contents' => '123123123'
            ],
            [
                'name' => 'name',
                'contents' => 'Arya Anggara'
            ],
            [
                'name' => 'phone_number',
                'contents' => '0821123213'
            ],
            [
                'name' => 'address',
                'contents' => 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia'
            ],
            [
                'name' => 'information',
                'contents' => 'possimus'
            ],
            [
                'name' => 'photo',
                'contents' => fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/php8hdaEg', 'r')
            ],
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
<div id="execution-results-POSTapi-perpetrators--perpetrator-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-perpetrators--perpetrator-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-perpetrators--perpetrator-"></code></pre>
</div>
<div id="execution-error-POSTapi-perpetrators--perpetrator-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-perpetrators--perpetrator-"></code></pre>
</div>
<form id="form-POSTapi-perpetrators--perpetrator-" data-method="POST" data-path="api/perpetrators/{perpetrator}" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"multipart\/form-data"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-perpetrators--perpetrator-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-perpetrators--perpetrator-" onclick="tryItOut('POSTapi-perpetrators--perpetrator-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-perpetrators--perpetrator-" onclick="cancelTryOut('POSTapi-perpetrators--perpetrator-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-perpetrators--perpetrator-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/perpetrators/{perpetrator}</code></b>
</p>
<p>
<label id="auth-POSTapi-perpetrators--perpetrator-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>perpetrator</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="perpetrator" data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="url" required  hidden>
<br>
valid id perpetrator. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>case_report_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="case_report_id" data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="body"  hidden>
<br>
valid id <b>case_report</b>.
</p>
<p>
<b><code>nik</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="nik" data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="body" required  hidden>
<br>
NIK.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="body" required  hidden>
<br>
Nama lengkap.
</p>
<p>
<b><code>phone_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone_number" data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="body" required  hidden>
<br>
nomor telepon.
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="body" required  hidden>
<br>
Alamat lengkap.
</p>
<p>
<b><code>photo</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="photo" data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="body" required  hidden>
<br>
file berupa gambar
</p>
<p>
<b><code>information</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="information" data-endpoint="POSTapi-perpetrators--perpetrator-" data-component="body" required  hidden>
<br>
informasi tambahan.
</p>

</form>


## Menghapus salah satu pelaku.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>

> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/perpetrators/maxime" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/perpetrators/maxime"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://brn-api.test/api/perpetrators/maxime',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
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
<div id="execution-results-DELETEapi-perpetrators--perpetrator-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-perpetrators--perpetrator-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-perpetrators--perpetrator-"></code></pre>
</div>
<div id="execution-error-DELETEapi-perpetrators--perpetrator-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-perpetrators--perpetrator-"></code></pre>
</div>
<form id="form-DELETEapi-perpetrators--perpetrator-" data-method="DELETE" data-path="api/perpetrators/{perpetrator}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-perpetrators--perpetrator-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-perpetrators--perpetrator-" onclick="tryItOut('DELETEapi-perpetrators--perpetrator-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-perpetrators--perpetrator-" onclick="cancelTryOut('DELETEapi-perpetrators--perpetrator-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-perpetrators--perpetrator-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/perpetrators/{perpetrator}</code></b>
</p>
<p>
<label id="auth-DELETEapi-perpetrators--perpetrator-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-perpetrators--perpetrator-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>perpetrator</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perpetrator" data-endpoint="DELETEapi-perpetrators--perpetrator-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>car</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car" data-endpoint="DELETEapi-perpetrators--perpetrator-" data-component="url" required  hidden>
<br>
valid id car. Defaults to 'id'.
</p>
</form>



