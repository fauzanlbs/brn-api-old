# Agenda


## Mendapatkan list data agenda.


Dibagian ini Anda bisa mendapatkan list data agenda.

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/agendas?search=Avansa&page[number]=1&page[size]=2&sort=created_at&include=user&filter[type]=HUT&filter[title]=deserunt&filter[description]=magnam&filter[address]=placeat&filter[latitude]=31.2467601&filter[longitude]=29.9020376&filter[start_date]=2020-01-24&filter[end_date]=2020-12-24&filter[start_time]=12%3A00&filter[end_time]=17%3A00&filter[created_at]=2020-12-24" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/agendas"
);

let params = {
    "search": "Avansa",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "include": "user",
    "filter[type]": "HUT",
    "filter[title]": "deserunt",
    "filter[description]": "magnam",
    "filter[address]": "placeat",
    "filter[latitude]": "31.2467601",
    "filter[longitude]": "29.9020376",
    "filter[start_date]": "2020-01-24",
    "filter[end_date]": "2020-12-24",
    "filter[start_time]": "12:00",
    "filter[end_time]": "17:00",
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
    'https://brn-api.test/api/agendas',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Avansa',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'include'=> 'user',
            'filter[type]'=> 'HUT',
            'filter[title]'=> 'deserunt',
            'filter[description]'=> 'magnam',
            'filter[address]'=> 'placeat',
            'filter[latitude]'=> '31.2467601',
            'filter[longitude]'=> '29.9020376',
            'filter[start_date]'=> '2020-01-24',
            'filter[end_date]'=> '2020-12-24',
            'filter[start_time]'=> '12:00',
            'filter[end_time]'=> '17:00',
            'filter[created_at]'=> '2020-12-24',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-agendas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-agendas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agendas"></code></pre>
</div>
<div id="execution-error-GETapi-agendas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agendas"></code></pre>
</div>
<form id="form-GETapi-agendas" data-method="GET" data-path="api/agendas" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-agendas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-agendas" onclick="tryItOut('GETapi-agendas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-agendas" onclick="cancelTryOut('GETapi-agendas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-agendas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/agendas</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Mencari data agenda.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Include akan memuat relasi, relasi yang tersedia: <br> #1 <b>user</b> : Pengguna yang membuat agenda. <br> #2 <b>area</b> : Daerah.
</p>
<p>
<b><code>filter[type]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[type]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tipe agenda.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[description]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[description]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan deskripsi.
</p>
<p>
<b><code>filter[address]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[address]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan deskripsi.
</p>
<p>
<b><code>filter[latitude]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[latitude]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan latitude.
</p>
<p>
<b><code>filter[longitude]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[longitude]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan longitude.
</p>
<p>
<b><code>filter[start_date]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[start_date]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal mulai.
</p>
<p>
<b><code>filter[end_date]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[end_date]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal selesai.
</p>
<p>
<b><code>filter[start_time]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[start_time]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan jam mulai.
</p>
<p>
<b><code>filter[end_time]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[end_time]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan jam selesai.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-agendas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>


## Mendapatkan detail data agenda.




> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/agendas/1" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/agendas/1"
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
    'https://brn-api.test/api/agendas/1',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-agendas--agenda-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-agendas--agenda-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agendas--agenda-"></code></pre>
</div>
<div id="execution-error-GETapi-agendas--agenda-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agendas--agenda-"></code></pre>
</div>
<form id="form-GETapi-agendas--agenda-" data-method="GET" data-path="api/agendas/{agenda}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-agendas--agenda-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-agendas--agenda-" onclick="tryItOut('GETapi-agendas--agenda-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-agendas--agenda-" onclick="cancelTryOut('GETapi-agendas--agenda-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-agendas--agenda-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/agendas/{agenda}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>agenda</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="agenda" data-endpoint="GETapi-agendas--agenda-" data-component="url" required  hidden>
<br>
valid id agenda.
</p>
</form>


## Menambahkan agenda.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menambahkan agenda.
<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/agendas" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: multipart/form-data" \
    -F "area_id=1" \
    -F "type=KOPDAR" \
    -F "title=Acara Kopdar BRN." \
    -F "description=Datang untuk menhadiri acara kopdar BRN pada tangal ****." \
    -F "address=Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara." \
    -F "start_date=2021-03-05" \
    -F "end_date=2021-11-11" \
    -F "start_time=08:00:00" \
    -F "end_time=13:20:00" \
    -F "location=31.2467601,29.9020376" \
    -F "image=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpdnHfjA" 
```

```javascript
const url = new URL(
    "https://brn-api.test/api/agendas"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "multipart/form-data",
};

const body = new FormData();
body.append('area_id', '1');
body.append('type', 'KOPDAR');
body.append('title', 'Acara Kopdar BRN.');
body.append('description', 'Datang untuk menhadiri acara kopdar BRN pada tangal ****.');
body.append('address', 'Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara.');
body.append('start_date', '2021-03-05');
body.append('end_date', '2021-11-11');
body.append('start_time', '08:00:00');
body.append('end_time', '13:20:00');
body.append('location', '31.2467601,29.9020376');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://brn-api.test/api/agendas',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'area_id',
                'contents' => '1'
            ],
            [
                'name' => 'type',
                'contents' => 'KOPDAR'
            ],
            [
                'name' => 'title',
                'contents' => 'Acara Kopdar BRN.'
            ],
            [
                'name' => 'description',
                'contents' => 'Datang untuk menhadiri acara kopdar BRN pada tangal ****.'
            ],
            [
                'name' => 'address',
                'contents' => 'Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara.'
            ],
            [
                'name' => 'start_date',
                'contents' => '2021-03-05'
            ],
            [
                'name' => 'end_date',
                'contents' => '2021-11-11'
            ],
            [
                'name' => 'start_time',
                'contents' => '08:00:00'
            ],
            [
                'name' => 'end_time',
                'contents' => '13:20:00'
            ],
            [
                'name' => 'location',
                'contents' => '31.2467601,29.9020376'
            ],
            [
                'name' => 'image',
                'contents' => fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpdnHfjA', 'r')
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
<div id="execution-results-POSTapi-agendas" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-agendas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agendas"></code></pre>
</div>
<div id="execution-error-POSTapi-agendas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agendas"></code></pre>
</div>
<form id="form-POSTapi-agendas" data-method="POST" data-path="api/agendas" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"multipart\/form-data"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-agendas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-agendas" onclick="tryItOut('POSTapi-agendas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-agendas" onclick="cancelTryOut('POSTapi-agendas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-agendas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/agendas</code></b>
</p>
<p>
<label id="auth-POSTapi-agendas" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-agendas" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>area_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="area_id" data-endpoint="POSTapi-agendas" data-component="body" required  hidden>
<br>
valid id <b>area</b>.
</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="image" data-endpoint="POSTapi-agendas" data-component="body"  hidden>
<br>
file berupa gambar gambar.
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="type" data-endpoint="POSTapi-agendas" data-component="body"  hidden>
<br>
valid string in HUT,TOUR,KOPDAR,UNCATEGORIZED. Default UNCATEGORIZED.
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-agendas" data-component="body" required  hidden>
<br>
judul agenda.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-agendas" data-component="body" required  hidden>
<br>
deskripsi agenda.
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-agendas" data-component="body" required  hidden>
<br>
alamat.
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTapi-agendas" data-component="body" required  hidden>
<br>
tanggal mulai.
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTapi-agendas" data-component="body" required  hidden>
<br>
tanggal selesai.
</p>
<p>
<b><code>start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_time" data-endpoint="POSTapi-agendas" data-component="body" required  hidden>
<br>
jam mulai.
</p>
<p>
<b><code>end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_time" data-endpoint="POSTapi-agendas" data-component="body" required  hidden>
<br>
jam selesai.
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="location" data-endpoint="POSTapi-agendas" data-component="body"  hidden>
<br>
lokasi (lat, long).
</p>

</form>


## Memperbaharui salah satu agenda.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa memperbaharui salah satu agenda.
<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/agendas/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: multipart/form-data" \
    -F "area_id=1" \
    -F "type=KOPDAR" \
    -F "title=Acara Kopdar BRN." \
    -F "description=Datang untuk menhadiri acara kopdar BRN pada tangal ****." \
    -F "address=Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara." \
    -F "start_date=2021-03-05" \
    -F "end_date=2021-11-11" \
    -F "start_time=08:00:00" \
    -F "end_time=13:20:00" \
    -F "location=31.2467601,29.9020376" \
    -F "image=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpcMqjWk" 
```

```javascript
const url = new URL(
    "https://brn-api.test/api/agendas/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "multipart/form-data",
};

const body = new FormData();
body.append('area_id', '1');
body.append('type', 'KOPDAR');
body.append('title', 'Acara Kopdar BRN.');
body.append('description', 'Datang untuk menhadiri acara kopdar BRN pada tangal ****.');
body.append('address', 'Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara.');
body.append('start_date', '2021-03-05');
body.append('end_date', '2021-11-11');
body.append('start_time', '08:00:00');
body.append('end_time', '13:20:00');
body.append('location', '31.2467601,29.9020376');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://brn-api.test/api/agendas/1',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'area_id',
                'contents' => '1'
            ],
            [
                'name' => 'type',
                'contents' => 'KOPDAR'
            ],
            [
                'name' => 'title',
                'contents' => 'Acara Kopdar BRN.'
            ],
            [
                'name' => 'description',
                'contents' => 'Datang untuk menhadiri acara kopdar BRN pada tangal ****.'
            ],
            [
                'name' => 'address',
                'contents' => 'Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara.'
            ],
            [
                'name' => 'start_date',
                'contents' => '2021-03-05'
            ],
            [
                'name' => 'end_date',
                'contents' => '2021-11-11'
            ],
            [
                'name' => 'start_time',
                'contents' => '08:00:00'
            ],
            [
                'name' => 'end_time',
                'contents' => '13:20:00'
            ],
            [
                'name' => 'location',
                'contents' => '31.2467601,29.9020376'
            ],
            [
                'name' => 'image',
                'contents' => fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpcMqjWk', 'r')
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
<div id="execution-results-POSTapi-agendas--agenda-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-agendas--agenda-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agendas--agenda-"></code></pre>
</div>
<div id="execution-error-POSTapi-agendas--agenda-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agendas--agenda-"></code></pre>
</div>
<form id="form-POSTapi-agendas--agenda-" data-method="POST" data-path="api/agendas/{agenda}" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"multipart\/form-data"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-agendas--agenda-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-agendas--agenda-" onclick="tryItOut('POSTapi-agendas--agenda-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-agendas--agenda-" onclick="cancelTryOut('POSTapi-agendas--agenda-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-agendas--agenda-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/agendas/{agenda}</code></b>
</p>
<p>
<label id="auth-POSTapi-agendas--agenda-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-agendas--agenda-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>agenda</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="agenda" data-endpoint="POSTapi-agendas--agenda-" data-component="url" required  hidden>
<br>
valid id agenda. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>area_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="area_id" data-endpoint="POSTapi-agendas--agenda-" data-component="body" required  hidden>
<br>
valid id <b>area</b>.
</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="image" data-endpoint="POSTapi-agendas--agenda-" data-component="body"  hidden>
<br>
file berupa gambar gambar.
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="type" data-endpoint="POSTapi-agendas--agenda-" data-component="body"  hidden>
<br>
valid string in HUT,TOUR,KOPDAR,UNCATEGORIZED. Default UNCATEGORIZED.
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-agendas--agenda-" data-component="body" required  hidden>
<br>
judul agenda.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-agendas--agenda-" data-component="body" required  hidden>
<br>
deskripsi agenda.
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-agendas--agenda-" data-component="body" required  hidden>
<br>
alamat.
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTapi-agendas--agenda-" data-component="body" required  hidden>
<br>
tanggal mulai.
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTapi-agendas--agenda-" data-component="body" required  hidden>
<br>
tanggal selesai.
</p>
<p>
<b><code>start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_time" data-endpoint="POSTapi-agendas--agenda-" data-component="body" required  hidden>
<br>
jam mulai.
</p>
<p>
<b><code>end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_time" data-endpoint="POSTapi-agendas--agenda-" data-component="body" required  hidden>
<br>
jam selesai.
</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="location" data-endpoint="POSTapi-agendas--agenda-" data-component="body"  hidden>
<br>
lokasi (lat, long).
</p>

</form>


## Memperbaharui gambar agenda.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/agendas/1/image" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: multipart/form-data" \
    -F "image=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpgDqedf" 
```

```javascript
const url = new URL(
    "https://brn-api.test/api/agendas/1/image"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "multipart/form-data",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://brn-api.test/api/agendas/1/image',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'image',
                'contents' => fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpgDqedf', 'r')
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
 "message": "Gambar berhasil diperbaharui",
 "data": {
    "image_url" : "https:// ....."
 },
}
```
<div id="execution-results-POSTapi-agendas--agenda--image" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-agendas--agenda--image"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-agendas--agenda--image"></code></pre>
</div>
<div id="execution-error-POSTapi-agendas--agenda--image" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-agendas--agenda--image"></code></pre>
</div>
<form id="form-POSTapi-agendas--agenda--image" data-method="POST" data-path="api/agendas/{agenda}/image" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"multipart\/form-data"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-agendas--agenda--image', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-agendas--agenda--image" onclick="tryItOut('POSTapi-agendas--agenda--image');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-agendas--agenda--image" onclick="cancelTryOut('POSTapi-agendas--agenda--image');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-agendas--agenda--image" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/agendas/{agenda}/image</code></b>
</p>
<p>
<label id="auth-POSTapi-agendas--agenda--image" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-agendas--agenda--image" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>agenda</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="agenda" data-endpoint="POSTapi-agendas--agenda--image" data-component="url" required  hidden>
<br>
valid id agenda. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="POSTapi-agendas--agenda--image" data-component="body" required  hidden>
<br>
gambar.
</p>

</form>


## Menghapus salah satu agenda.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menghapus salah satu agenda.
<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>

> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/agendas/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/agendas/1"
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
    'https://brn-api.test/api/agendas/1',
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
<div id="execution-results-DELETEapi-agendas--agenda-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-agendas--agenda-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-agendas--agenda-"></code></pre>
</div>
<div id="execution-error-DELETEapi-agendas--agenda-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-agendas--agenda-"></code></pre>
</div>
<form id="form-DELETEapi-agendas--agenda-" data-method="DELETE" data-path="api/agendas/{agenda}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-agendas--agenda-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-agendas--agenda-" onclick="tryItOut('DELETEapi-agendas--agenda-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-agendas--agenda-" onclick="cancelTryOut('DELETEapi-agendas--agenda-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-agendas--agenda-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/agendas/{agenda}</code></b>
</p>
<p>
<label id="auth-DELETEapi-agendas--agenda-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-agendas--agenda-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>agenda</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="agenda" data-endpoint="DELETEapi-agendas--agenda-" data-component="url" required  hidden>
<br>
valid id agenda. Defaults to 'id'.
</p>
</form>


## Menghapus gambar agenda.

<small class="badge badge-darkred">requires authentication</small>

<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>

> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/agendas/1/image" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/agendas/1/image"
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
    'https://brn-api.test/api/agendas/1/image',
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
<div id="execution-results-DELETEapi-agendas--agenda--image" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-agendas--agenda--image"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-agendas--agenda--image"></code></pre>
</div>
<div id="execution-error-DELETEapi-agendas--agenda--image" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-agendas--agenda--image"></code></pre>
</div>
<form id="form-DELETEapi-agendas--agenda--image" data-method="DELETE" data-path="api/agendas/{agenda}/image" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-agendas--agenda--image', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-agendas--agenda--image" onclick="tryItOut('DELETEapi-agendas--agenda--image');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-agendas--agenda--image" onclick="cancelTryOut('DELETEapi-agendas--agenda--image');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-agendas--agenda--image" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/agendas/{agenda}/image</code></b>
</p>
<p>
<label id="auth-DELETEapi-agendas--agenda--image" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-agendas--agenda--image" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>agenda</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="agenda" data-endpoint="DELETEapi-agendas--agenda--image" data-component="url" required  hidden>
<br>
valid id agenda. Defaults to 'id'.
</p>
</form>


## Absen Agenda.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/agendas/1/qr-scan" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/agendas/1/qr-scan"
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
    'https://brn-api.test/api/agendas/1/qr-scan',
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
<div id="execution-results-GETapi-agendas--agenda--qr-scan" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-agendas--agenda--qr-scan"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-agendas--agenda--qr-scan"></code></pre>
</div>
<div id="execution-error-GETapi-agendas--agenda--qr-scan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-agendas--agenda--qr-scan"></code></pre>
</div>
<form id="form-GETapi-agendas--agenda--qr-scan" data-method="GET" data-path="api/agendas/{agenda}/qr-scan" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-agendas--agenda--qr-scan', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-agendas--agenda--qr-scan" onclick="tryItOut('GETapi-agendas--agenda--qr-scan');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-agendas--agenda--qr-scan" onclick="cancelTryOut('GETapi-agendas--agenda--qr-scan');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-agendas--agenda--qr-scan" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/agendas/{agenda}/qr-scan</code></b>
</p>
<p>
<label id="auth-GETapi-agendas--agenda--qr-scan" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-agendas--agenda--qr-scan" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>agenda</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="agenda" data-endpoint="GETapi-agendas--agenda--qr-scan" data-component="url" required  hidden>
<br>
valid id agenda.
</p>
</form>



