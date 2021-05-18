# Forum Diskusi


## Mendapatkan list data diskusi pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa mendapatkan list data diskusi. note: <i>description</i> dilimit 100 karekter, Anda bisa melihat semua di detail diskusi.

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/my-discussions/case-reports?search=Mobil+baru&page[number]=1&page[size]=2&sort=created_at&filter[title]=Mobil+baru&filter[slug]=mobil-baru&filter[created_at]=2020-12-24&filter[featured]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-discussions/case-reports"
);

let params = {
    "search": "Mobil baru",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[title]": "Mobil baru",
    "filter[slug]": "mobil-baru",
    "filter[created_at]": "2020-12-24",
    "filter[featured]": "1",
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
    'https://brn-api.test/api/my-discussions/case-reports',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Mobil baru',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[title]'=> 'Mobil baru',
            'filter[slug]'=> 'mobil-baru',
            'filter[created_at]'=> '2020-12-24',
            'filter[featured]'=> '1',
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
            "id": 12,
            "case_report_id": null,
            "slug": "slug",
            "title": "title",
            "description": "description",
            "featured": false,
            "created_at": "2021-05-18T07:18:28.000000Z",
            "updated_at": "2021-05-18T07:18:28.000000Z",
            "likes_count": 0,
            "comments_count": 0,
            "user": {
                "id": 1,
                "roles": [
                    {
                        "name": "admin"
                    }
                ],
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
                "created_at": "2021-05-18T06:44:10.000000Z"
            }
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/my-discussions?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/my-discussions",
        "per_page": 15,
        "to": 1
    }
}
```
<div id="execution-results-GETapi-my-discussions--filterCaseReports--" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-discussions--filterCaseReports--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-discussions--filterCaseReports--"></code></pre>
</div>
<div id="execution-error-GETapi-my-discussions--filterCaseReports--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-discussions--filterCaseReports--"></code></pre>
</div>
<form id="form-GETapi-my-discussions--filterCaseReports--" data-method="GET" data-path="api/my-discussions/{filterCaseReports?}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-discussions--filterCaseReports--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-discussions--filterCaseReports--" onclick="tryItOut('GETapi-my-discussions--filterCaseReports--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-discussions--filterCaseReports--" onclick="cancelTryOut('GETapi-my-discussions--filterCaseReports--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-discussions--filterCaseReports--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-discussions/{filterCaseReports?}</code></b>
</p>
<p>
<label id="auth-GETapi-my-discussions--filterCaseReports--" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>filterCaseReports</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filterCaseReports" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="url"  hidden>
<br>
valid string case-reports. Defaults null.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="query"  hidden>
<br>
Mencari data diskusi.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-my-discussions--filterCaseReports--" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1.
</p>
</form>


## Mendapatkan detail data diskusi.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1"
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
    'https://brn-api.test/api/discussions/1',
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
        "id": 12,
        "case_report_id": 1,
        "slug": "slug",
        "title": "title",
        "description": "description",
        "featured": false,
        "created_at": "2021-05-18T07:18:28.000000Z",
        "updated_at": "2021-05-18T07:18:28.000000Z",
        "likes_count": 0,
        "comments_count": 0,
        "user": {
            "id": 1,
            "roles": [
                {
                    "name": "admin"
                }
            ],
            "name": "Admin Arya Anggara",
            "email": "aryaanggara.dev@gmail.com",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
            "created_at": "2021-05-18T06:44:10.000000Z"
        },
        "case_report": null
    }
}
```
<div id="execution-results-GETapi-discussions--discussion-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions--discussion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions--discussion-"></code></pre>
</div>
<div id="execution-error-GETapi-discussions--discussion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions--discussion-"></code></pre>
</div>
<form id="form-GETapi-discussions--discussion-" data-method="GET" data-path="api/discussions/{discussion}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions--discussion-" onclick="tryItOut('GETapi-discussions--discussion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions--discussion-" onclick="cancelTryOut('GETapi-discussions--discussion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions--discussion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions/{discussion}</code></b>
</p>
<p>
<label id="auth-GETapi-discussions--discussion-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions--discussion-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="GETapi-discussions--discussion-" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
</form>


## Menambahkan diskusi pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menambahkan diskusi pengguna saat ini.

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/discussions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"title":"diskusi tentang rental mobil","description":"tempora"}'

```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "title": "diskusi tentang rental mobil",
    "description": "tempora"
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
    'https://brn-api.test/api/discussions',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'diskusi tentang rental mobil',
            'description' => 'tempora',
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
<div id="execution-results-POSTapi-discussions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions"></code></pre>
</div>
<form id="form-POSTapi-discussions" data-method="POST" data-path="api/discussions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions" onclick="tryItOut('POSTapi-discussions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions" onclick="cancelTryOut('POSTapi-discussions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-discussions" data-component="body" required  hidden>
<br>
judul diskusi.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-discussions" data-component="body"  hidden>
<br>
deskripsi diskusi.
</p>

</form>


## Memperbaharui salah satu diskusi pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa memperbaharui salah satu diskusi pengguna saat ini.

> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"title":"diskusi tentang rental mobil","description":"nemo"}'

```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "title": "diskusi tentang rental mobil",
    "description": "nemo"
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
    'https://brn-api.test/api/discussions/1',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'title' => 'diskusi tentang rental mobil',
            'description' => 'nemo',
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
<div id="execution-results-POSTapi-discussions--discussion-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions--discussion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions--discussion-"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions--discussion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions--discussion-"></code></pre>
</div>
<form id="form-POSTapi-discussions--discussion-" data-method="POST" data-path="api/discussions/{discussion}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions--discussion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions--discussion-" onclick="tryItOut('POSTapi-discussions--discussion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions--discussion-" onclick="cancelTryOut('POSTapi-discussions--discussion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions--discussion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/{discussion}</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions--discussion-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions--discussion-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="POSTapi-discussions--discussion-" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-discussions--discussion-" data-component="body" required  hidden>
<br>
judul diskusi.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-discussions--discussion-" data-component="body"  hidden>
<br>
deskripsi diskusi.
</p>

</form>


## Menghapus salah satu diskusi pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa menghapus salah satu diskusi pengguna saat ini.

> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1"
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
    'https://brn-api.test/api/discussions/1',
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
<div id="execution-results-DELETEapi-discussions--discussion-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-discussions--discussion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-discussions--discussion-"></code></pre>
</div>
<div id="execution-error-DELETEapi-discussions--discussion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-discussions--discussion-"></code></pre>
</div>
<form id="form-DELETEapi-discussions--discussion-" data-method="DELETE" data-path="api/discussions/{discussion}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-discussions--discussion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-discussions--discussion-" onclick="tryItOut('DELETEapi-discussions--discussion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-discussions--discussion-" onclick="cancelTryOut('DELETEapi-discussions--discussion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-discussions--discussion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/discussions/{discussion}</code></b>
</p>
<p>
<label id="auth-DELETEapi-discussions--discussion-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-discussions--discussion-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="DELETEapi-discussions--discussion-" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
</form>


## Mendapatkan list data komentar diskusi.




> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/discussions/1/comments?page[number]=1&page[size]=2" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
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
    'https://brn-api.test/api/discussions/1/comments',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'page[number]'=> '1',
            'page[size]'=> '2',
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
            "id": 4,
            "comment": "Semangat Terus !!!",
            "likes_count": 1,
            "created_at": "2021-04-30T18:14:44.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
                "created_at": "2021-04-30T16:05:56.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/articles\/2\/comments?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/articles\/2\/comments",
        "per_page": 15,
        "to": 2
    }
}
```
<div id="execution-results-GETapi-discussions--discussion--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions--discussion--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions--discussion--comments"></code></pre>
</div>
<div id="execution-error-GETapi-discussions--discussion--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions--discussion--comments"></code></pre>
</div>
<form id="form-GETapi-discussions--discussion--comments" data-method="GET" data-path="api/discussions/{discussion}/comments" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions--discussion--comments" onclick="tryItOut('GETapi-discussions--discussion--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions--discussion--comments" onclick="cancelTryOut('GETapi-discussions--discussion--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions--discussion--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions/{discussion}/comments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="GETapi-discussions--discussion--comments" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-discussions--discussion--comments" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-discussions--discussion--comments" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Mendapatkan list data user yang menyukai diskusi.




> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/discussions/1/likes?page[number]=1&page[size]=2" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
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
    'https://brn-api.test/api/discussions/1/likes',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'page[number]'=> '1',
            'page[size]'=> '2',
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
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
                "created_at": "2021-04-30T16:05:56.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/articles\/3\/liked?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/articles\/3\/liked",
        "per_page": 15,
        "to": 1
    }
}
```
<div id="execution-results-GETapi-discussions--discussion--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions--discussion--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions--discussion--likes"></code></pre>
</div>
<div id="execution-error-GETapi-discussions--discussion--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions--discussion--likes"></code></pre>
</div>
<form id="form-GETapi-discussions--discussion--likes" data-method="GET" data-path="api/discussions/{discussion}/likes" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions--discussion--likes" onclick="tryItOut('GETapi-discussions--discussion--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions--discussion--likes" onclick="cancelTryOut('GETapi-discussions--discussion--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions--discussion--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions/{discussion}/likes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="GETapi-discussions--discussion--likes" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-discussions--discussion--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-discussions--discussion--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Menambahan komentar diskusi.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/discussions/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'

```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/comments"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "comment": "Semangat terus :)"
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
    'https://brn-api.test/api/discussions/1/comments',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'comment' => 'Semangat terus :)',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

{
 "message": "Berhasil menambahkan komentar.",
}
```
<div id="execution-results-POSTapi-discussions--discussion--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions--discussion--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions--discussion--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions--discussion--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions--discussion--comments"></code></pre>
</div>
<form id="form-POSTapi-discussions--discussion--comments" data-method="POST" data-path="api/discussions/{discussion}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions--discussion--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions--discussion--comments" onclick="tryItOut('POSTapi-discussions--discussion--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions--discussion--comments" onclick="cancelTryOut('POSTapi-discussions--discussion--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions--discussion--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/{discussion}/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions--discussion--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions--discussion--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="POSTapi-discussions--discussion--comments" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-discussions--discussion--comments" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>


## Menyukai diskusi.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/discussions/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://brn-api.test/api/discussions/1/liked',
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
 "message": "Berhasil menyukai diskusi.",
}
```
<div id="execution-results-POSTapi-discussions--discussion--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions--discussion--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions--discussion--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions--discussion--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions--discussion--liked"></code></pre>
</div>
<form id="form-POSTapi-discussions--discussion--liked" data-method="POST" data-path="api/discussions/{discussion}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions--discussion--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions--discussion--liked" onclick="tryItOut('POSTapi-discussions--discussion--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions--discussion--liked" onclick="cancelTryOut('POSTapi-discussions--discussion--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions--discussion--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/{discussion}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions--discussion--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions--discussion--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="POSTapi-discussions--discussion--liked" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
</form>


## Batalkan menyukai diskusi.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/discussions/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/liked"
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
    'https://brn-api.test/api/discussions/1/liked',
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
 "message": "Berhasil membatalkan menyukai diskusi.",
}
```
<div id="execution-results-DELETEapi-discussions--discussion--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-discussions--discussion--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-discussions--discussion--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-discussions--discussion--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-discussions--discussion--liked"></code></pre>
</div>
<form id="form-DELETEapi-discussions--discussion--liked" data-method="DELETE" data-path="api/discussions/{discussion}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-discussions--discussion--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-discussions--discussion--liked" onclick="tryItOut('DELETEapi-discussions--discussion--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-discussions--discussion--liked" onclick="cancelTryOut('DELETEapi-discussions--discussion--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-discussions--discussion--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/discussions/{discussion}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-discussions--discussion--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-discussions--discussion--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="DELETEapi-discussions--discussion--liked" data-component="url" required  hidden>
<br>
valid id discussion.
</p>
</form>



