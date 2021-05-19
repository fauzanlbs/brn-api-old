# Forum Diskusi


## Mendapatkan list data diskusi pengguna saat ini.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa mendapatkan list data diskusi pengguna saat ini. note: <i>description</i> dilimit 100 karekter, Anda bisa melihat semua di detail diskusi.

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/my-discussions?only=case-reports&search=Mobil+baru&page[number]=1&page[size]=2&sort=created_at&filter[title]=Mobil+baru&filter[slug]=mobil-baru&filter[created_at]=2020-12-24&filter[featured]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/my-discussions"
);

let params = {
    "only": "case-reports",
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
    'https://brn-api.test/api/my-discussions',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'only'=> 'case-reports',
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
<div id="execution-results-GETapi-my-discussions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-discussions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-discussions"></code></pre>
</div>
<div id="execution-error-GETapi-my-discussions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-discussions"></code></pre>
</div>
<form id="form-GETapi-my-discussions" data-method="GET" data-path="api/my-discussions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-discussions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-discussions" onclick="tryItOut('GETapi-my-discussions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-discussions" onclick="cancelTryOut('GETapi-my-discussions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-discussions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-discussions</code></b>
</p>
<p>
<label id="auth-GETapi-my-discussions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-discussions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>only</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="only" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diskusi yang hanya di kususkan untuk laporan kasus, (<b>case-reports</b>).
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Mencari data diskusi.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-my-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1.
</p>
</form>


## Mendapatkan list semua data diskusi.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa mendapatkan list semua data diskus. note: <i>description</i> dilimit 100 karekter, Anda bisa melihat semua di detail diskusi.

> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/discussions?only=case-reports&search=Mobil+baru&page[number]=1&page[size]=2&sort=created_at&filter[title]=Mobil+baru&filter[slug]=mobil-baru&filter[created_at]=2020-12-24&filter[featured]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions"
);

let params = {
    "only": "case-reports",
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
    'https://brn-api.test/api/discussions',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'only'=> 'case-reports',
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
<div id="execution-results-GETapi-discussions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions"></code></pre>
</div>
<div id="execution-error-GETapi-discussions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions"></code></pre>
</div>
<form id="form-GETapi-discussions" data-method="GET" data-path="api/discussions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions" onclick="tryItOut('GETapi-discussions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions" onclick="cancelTryOut('GETapi-discussions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions</code></b>
</p>
<p>
<label id="auth-GETapi-discussions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>only</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="only" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diskusi yang hanya di kususkan untuk laporan kasus, (<b>case-reports</b>).
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Mencari data diskusi.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-discussions" data-component="query"  hidden>
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
    -d '{"title":"diskusi tentang rental mobil","description":"qui"}'

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
    "description": "qui"
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
            'description' => 'qui',
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


## Menambahkan diskusi untuk laporan kasus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/discussions/case-report" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"invite_user_ids":1,"case_report_id":1}'

```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/case-report"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "invite_user_ids": 1,
    "case_report_id": 1
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
    'https://brn-api.test/api/discussions/case-report',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'invite_user_ids' => 1,
            'case_report_id' => 1,
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
<div id="execution-results-POSTapi-discussions-case-report" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions-case-report"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions-case-report"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions-case-report" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions-case-report"></code></pre>
</div>
<form id="form-POSTapi-discussions-case-report" data-method="POST" data-path="api/discussions/case-report" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions-case-report', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions-case-report" onclick="tryItOut('POSTapi-discussions-case-report');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions-case-report" onclick="cancelTryOut('POSTapi-discussions-case-report');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions-case-report" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/case-report</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions-case-report" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions-case-report" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>invite_user_ids</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="invite_user_ids.0" data-endpoint="POSTapi-discussions-case-report" data-component="body"  hidden>
<input type="number" name="invite_user_ids.1" data-endpoint="POSTapi-discussions-case-report" data-component="body" hidden>
<br>
List dari id user.
</p>
<p>
<b><code>case_report_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="case_report_id" data-endpoint="POSTapi-discussions-case-report" data-component="body" required  hidden>
<br>
valid id laporan kasus.
</p>

</form>


## Mendapatkan list data member diskusi.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/discussions/1/case-report/members?search=Arya+Anggara&page[number]=1&page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/case-report/members"
);

let params = {
    "search": "Arya Anggara",
    "page[number]": "1",
    "page[size]": "2",
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
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Arya Anggara',
            'page[number]'=> '1',
            'page[size]'=> '2',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-discussions--discussion--case-report-members"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-discussions--discussion--case-report-members"></code></pre>
</div>
<div id="execution-error-GETapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-discussions--discussion--case-report-members"></code></pre>
</div>
<form id="form-GETapi-discussions--discussion--case-report-members" data-method="GET" data-path="api/discussions/{discussion}/case-report/members" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion--case-report-members', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-discussions--discussion--case-report-members" onclick="tryItOut('GETapi-discussions--discussion--case-report-members');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-discussions--discussion--case-report-members" onclick="cancelTryOut('GETapi-discussions--discussion--case-report-members');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-discussions--discussion--case-report-members" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/discussions/{discussion}/case-report/members</code></b>
</p>
<p>
<label id="auth-GETapi-discussions--discussion--case-report-members" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="query"  hidden>
<br>
Mencari data member diskusi.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-discussions--discussion--case-report-members" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Menambahkan member diskusi.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://brn-api.test/api/discussions/1/case-report/members" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"user_ids":1}'

```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/case-report/members"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "user_ids": 1
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
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_ids' => 1,
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
<div id="execution-results-POSTapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-discussions--discussion--case-report-members"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-discussions--discussion--case-report-members"></code></pre>
</div>
<div id="execution-error-POSTapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-discussions--discussion--case-report-members"></code></pre>
</div>
<form id="form-POSTapi-discussions--discussion--case-report-members" data-method="POST" data-path="api/discussions/{discussion}/case-report/members" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-discussions--discussion--case-report-members', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-discussions--discussion--case-report-members" onclick="tryItOut('POSTapi-discussions--discussion--case-report-members');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-discussions--discussion--case-report-members" onclick="cancelTryOut('POSTapi-discussions--discussion--case-report-members');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-discussions--discussion--case-report-members" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/discussions/{discussion}/case-report/members</code></b>
</p>
<p>
<label id="auth-POSTapi-discussions--discussion--case-report-members" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-discussions--discussion--case-report-members" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="POSTapi-discussions--discussion--case-report-members" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_ids</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="user_ids.0" data-endpoint="POSTapi-discussions--discussion--case-report-members" data-component="body"  hidden>
<input type="number" name="user_ids.1" data-endpoint="POSTapi-discussions--discussion--case-report-members" data-component="body" hidden>
<br>
List dari id user.
</p>

</form>


## Mengeluarkan member diskusi.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://brn-api.test/api/discussions/1/case-report/members" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"user_ids":1}'

```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/case-report/members"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "user_ids": 1
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'json' => [
            'user_ids' => 1,
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
<div id="execution-results-DELETEapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-discussions--discussion--case-report-members"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-discussions--discussion--case-report-members"></code></pre>
</div>
<div id="execution-error-DELETEapi-discussions--discussion--case-report-members" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-discussions--discussion--case-report-members"></code></pre>
</div>
<form id="form-DELETEapi-discussions--discussion--case-report-members" data-method="DELETE" data-path="api/discussions/{discussion}/case-report/members" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-discussions--discussion--case-report-members', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-discussions--discussion--case-report-members" onclick="tryItOut('DELETEapi-discussions--discussion--case-report-members');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-discussions--discussion--case-report-members" onclick="cancelTryOut('DELETEapi-discussions--discussion--case-report-members');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-discussions--discussion--case-report-members" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/discussions/{discussion}/case-report/members</code></b>
</p>
<p>
<label id="auth-DELETEapi-discussions--discussion--case-report-members" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-discussions--discussion--case-report-members" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="DELETEapi-discussions--discussion--case-report-members" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_ids</code></b>&nbsp;&nbsp;<small>integer[]</small>     <i>optional</i> &nbsp;
<input type="number" name="user_ids.0" data-endpoint="DELETEapi-discussions--discussion--case-report-members" data-component="body"  hidden>
<input type="number" name="user_ids.1" data-endpoint="DELETEapi-discussions--discussion--case-report-members" data-component="body" hidden>
<br>
List dari id user.
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
    -d '{"title":"diskusi tentang rental mobil","description":"ut"}'

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
    "description": "ut"
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
            'description' => 'ut',
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


## Menandai diskusi sebagai selesai.

<small class="badge badge-darkred">requires authentication</small>

Setelah Anda menandai diskusi sebagai selesai pengguna lain tidak akan bisa menambahkan komentar.

> Example request:

```bash
curl -X PATCH \
    "https://brn-api.test/api/discussions/1/set-finish" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://brn-api.test/api/discussions/1/set-finish"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->patch(
    'https://brn-api.test/api/discussions/1/set-finish',
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
<div id="execution-results-PATCHapi-discussions--discussion--set-finish" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-discussions--discussion--set-finish"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-discussions--discussion--set-finish"></code></pre>
</div>
<div id="execution-error-PATCHapi-discussions--discussion--set-finish" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-discussions--discussion--set-finish"></code></pre>
</div>
<form id="form-PATCHapi-discussions--discussion--set-finish" data-method="PATCH" data-path="api/discussions/{discussion}/set-finish" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-discussions--discussion--set-finish', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-discussions--discussion--set-finish" onclick="tryItOut('PATCHapi-discussions--discussion--set-finish');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-discussions--discussion--set-finish" onclick="cancelTryOut('PATCHapi-discussions--discussion--set-finish');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-discussions--discussion--set-finish" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/discussions/{discussion}/set-finish</code></b>
</p>
<p>
<label id="auth-PATCHapi-discussions--discussion--set-finish" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-discussions--discussion--set-finish" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>discussion</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="discussion" data-endpoint="PATCHapi-discussions--discussion--set-finish" data-component="url" required  hidden>
<br>
valid id discussion. Defaults to 'id'.
</p>
</form>


## Mendapatkan list data komentar diskusi.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/discussions/1/comments?page[number]=1&page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
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
    'https://brn-api.test/api/discussions/1/comments',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
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
<form id="form-GETapi-discussions--discussion--comments" data-method="GET" data-path="api/discussions/{discussion}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion--comments', this);">
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
<p>
<label id="auth-GETapi-discussions--discussion--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions--discussion--comments" data-component="header"></label>
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

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://brn-api.test/api/discussions/1/likes?page[number]=1&page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
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
    'https://brn-api.test/api/discussions/1/likes',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
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
<form id="form-GETapi-discussions--discussion--likes" data-method="GET" data-path="api/discussions/{discussion}/likes" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-discussions--discussion--likes', this);">
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
<p>
<label id="auth-GETapi-discussions--discussion--likes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-discussions--discussion--likes" data-component="header"></label>
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



