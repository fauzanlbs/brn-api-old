# Kursus


## Mendapatkan list data kursus yang diikuti.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa mendapatkan list data kurus yang diikuti.

> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/my-courses?search=Berita+hari+ini&page[number]=1&page[size]=2&sort=created_at&filter[name]=Marketing+Di+Social+Media&filter[description]=Di+kursus+ini+anda+akan+belajar+bagaiman+cara+berjualan+online+di+Social+Media&filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/my-courses"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[name]": "Marketing Di Social Media",
    "filter[description]": "Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media",
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
    'https://api-brn.neosantara.co.id/api/my-courses',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Berita hari ini',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[name]'=> 'Marketing Di Social Media',
            'filter[description]'=> 'Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media',
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
            "id": 1,
            "user_id": 1,
            "image": null,
            "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&color=7F9CF5&background=EBF4FF",
            "name": "Microsoft Excel dari dasar hingga mahir",
            "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
            "lessons_count": 7,
            "likes_count": 321,
            "comments_count": 5,
            "created_at": "2021-05-01T12:58:24.000000Z",
            "updated_at": "2021-05-01T12:58:24.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/courses?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/courses?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/courses",
        "per_page": 15,
        "to": 15
    }
}
```
<div id="execution-results-GETapi-my-courses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-courses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-courses"></code></pre>
</div>
<div id="execution-error-GETapi-my-courses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-courses"></code></pre>
</div>
<form id="form-GETapi-my-courses" data-method="GET" data-path="api/my-courses" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-courses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-courses" onclick="tryItOut('GETapi-my-courses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-courses" onclick="cancelTryOut('GETapi-my-courses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-courses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-courses</code></b>
</p>
<p>
<label id="auth-GETapi-my-courses" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-courses" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Mencari data kurus yang diikuti.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[description]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[description]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan deskripsi.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>


## Mendapatkan list data kursus.


Dibagian ini Anda bisa mendapatkan list data kursus. note: sebelum Anda bisa melihat pembelajaran/video kursus Anda harus mengikut kursus nya terlebih dahulu

> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/courses?search=Berita+hari+ini&page[number]=1&page[size]=2&sort=created_at&filter[name]=Marketing+Di+Social+Media&filter[description]=Di+kursus+ini+anda+akan+belajar+bagaiman+cara+berjualan+online+di+Social+Media&filter[created_at]=2020-12-24" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[name]": "Marketing Di Social Media",
    "filter[description]": "Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media",
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
    'https://api-brn.neosantara.co.id/api/courses',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Berita hari ini',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
            'filter[name]'=> 'Marketing Di Social Media',
            'filter[description]'=> 'Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media',
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
            "id": 1,
            "user_id": 1,
            "image": null,
            "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&color=7F9CF5&background=EBF4FF",
            "name": "Microsoft Excel dari dasar hingga mahir",
            "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
            "lessons_count": 7,
            "likes_count": 321,
            "comments_count": 5,
            "created_at": "2021-05-01T12:58:24.000000Z",
            "updated_at": "2021-05-01T12:58:24.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/courses?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/courses?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/courses",
        "per_page": 15,
        "to": 15
    }
}
```
<div id="execution-results-GETapi-courses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses"></code></pre>
</div>
<div id="execution-error-GETapi-courses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses"></code></pre>
</div>
<form id="form-GETapi-courses" data-method="GET" data-path="api/courses" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses" onclick="tryItOut('GETapi-courses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses" onclick="cancelTryOut('GETapi-courses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Mencari data kursus.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[description]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[description]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan deskripsi.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>


## Mendapatkan detail data kursus.




> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/courses/1" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1"
);

let headers = {
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
    'https://api-brn.neosantara.co.id/api/courses/1',
    [
        'headers' => [
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
        "id": 1,
        "user_id": 1,
        "user": {
            "id": 1,
            "name": "Admin Arya Anggara",
            "email": "aryaanggara.dev@gmail.com",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&color=7F9CF5&background=EBF4FF",
            "created_at": "2021-05-01T12:58:23.000000Z"
        },
        "image": null,
        "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&color=7F9CF5&background=EBF4FF",
        "name": "Microsoft Excel dari dasar hingga mahir",
        "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
        "status": "enabled",
        "lessons_count": 7,
        "likes_count": 321,
        "comments_count": 5,
        "created_at": "2021-05-01T12:58:24.000000Z",
        "updated_at": "2021-05-01T12:58:24.000000Z"
    }
}
```
<div id="execution-results-POSTapi-courses--course-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course-"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course-"></code></pre>
</div>
<form id="form-POSTapi-courses--course-" data-method="POST" data-path="api/courses/{course}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course-" onclick="tryItOut('POSTapi-courses--course-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course-" onclick="cancelTryOut('POSTapi-courses--course-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course-" data-component="url" required  hidden>
<br>
valid id course.
</p>
</form>


## Mendapatkan list data komentar kursus.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/courses/1/comments?page[number]=1&page[size]=2" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/comments"
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
    'https://api-brn.neosantara.co.id/api/courses/1/comments',
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
<div id="execution-results-GETapi-courses--course--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--comments"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--comments"></code></pre>
</div>
<form id="form-GETapi-courses--course--comments" data-method="GET" data-path="api/courses/{course}/comments" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--comments" onclick="tryItOut('GETapi-courses--course--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--comments" onclick="cancelTryOut('GETapi-courses--course--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/comments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--comments" data-component="url" required  hidden>
<br>
valid id course.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--comments" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--comments" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Mendapatkan list data user yang menyukai kursus.




> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/courses/1/likes?page[number]=1&page[size]=2" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/likes"
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
    'https://api-brn.neosantara.co.id/api/courses/1/likes',
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
<div id="execution-results-GETapi-courses--course--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--likes"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--likes"></code></pre>
</div>
<form id="form-GETapi-courses--course--likes" data-method="GET" data-path="api/courses/{course}/likes" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--likes" onclick="tryItOut('GETapi-courses--course--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--likes" onclick="cancelTryOut('GETapi-courses--course--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/likes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--likes" data-component="url" required  hidden>
<br>
valid id course.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Enroll kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/courses/1/enroll" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/enroll"
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
    'https://api-brn.neosantara.co.id/api/courses/1/enroll',
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
 "message": "Berhasil enroll kursus.",
}
```
<div id="execution-results-POSTapi-courses--course--enroll" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--enroll"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--enroll"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--enroll" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--enroll"></code></pre>
</div>
<form id="form-POSTapi-courses--course--enroll" data-method="POST" data-path="api/courses/{course}/enroll" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--enroll', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--enroll" onclick="tryItOut('POSTapi-courses--course--enroll');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--enroll" onclick="cancelTryOut('POSTapi-courses--course--enroll');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--enroll" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/enroll</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--enroll" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--enroll" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--enroll" data-component="url" required  hidden>
<br>
valid id course.
</p>
</form>


## Menambahan komentar kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/courses/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'

```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/comments"
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
    'https://api-brn.neosantara.co.id/api/courses/1/comments',
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
<div id="execution-results-POSTapi-courses--course--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--comments"></code></pre>
</div>
<form id="form-POSTapi-courses--course--comments" data-method="POST" data-path="api/courses/{course}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--comments" onclick="tryItOut('POSTapi-courses--course--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--comments" onclick="cancelTryOut('POSTapi-courses--course--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--comments" data-component="url" required  hidden>
<br>
valid id course.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-courses--course--comments" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>


## Menyukai kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/courses/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/liked"
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
    'https://api-brn.neosantara.co.id/api/courses/1/liked',
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
 "message": "Berhasil menyukai kursus.",
}
```
<div id="execution-results-POSTapi-courses--course--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--liked"></code></pre>
</div>
<form id="form-POSTapi-courses--course--liked" data-method="POST" data-path="api/courses/{course}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--liked" onclick="tryItOut('POSTapi-courses--course--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--liked" onclick="cancelTryOut('POSTapi-courses--course--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--liked" data-component="url" required  hidden>
<br>
valid id course.
</p>
</form>


## Batalkan menyukai kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://api-brn.neosantara.co.id/api/courses/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/liked"
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
    'https://api-brn.neosantara.co.id/api/courses/1/liked',
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
 "message": "Berhasil membatalkan menyukai kursus.",
}
```
<div id="execution-results-DELETEapi-courses--course--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-courses--course--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-courses--course--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-courses--course--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-courses--course--liked"></code></pre>
</div>
<form id="form-DELETEapi-courses--course--liked" data-method="DELETE" data-path="api/courses/{course}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-courses--course--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-courses--course--liked" onclick="tryItOut('DELETEapi-courses--course--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-courses--course--liked" onclick="cancelTryOut('DELETEapi-courses--course--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-courses--course--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/courses/{course}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-courses--course--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-courses--course--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="DELETEapi-courses--course--liked" data-component="url" required  hidden>
<br>
valid id course.
</p>
</form>


## Mendapatkan list data pembelajaran/video kursus.

<small class="badge badge-darkred">requires authentication</small>

Dibagian ini Anda bisa mendapatkan list data pembelajaran/video kursus.

> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/courses/1/lessons?search=Berita+hari+ini&page[number]=1&page[size]=2&sort=created_at" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/lessons"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
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
    'https://api-brn.neosantara.co.id/api/courses/1/lessons',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_KEY}',
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Berita hari ini',
            'page[number]'=> '1',
            'page[size]'=> '2',
            'sort'=> 'created_at',
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
            "title": "Microsoft Excel dari dasar hingga mahir",
            "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
            "youtube_url": "https: \/\/www.youtube.com\/watch?v=x9f3RAsNZhU&list=RDx9f3RAsNZhU&start_radio=1&ab_channel=EditraTamba",
            "likes_count": 321,
            "comments_count": 5,
            "updated_at": "2021-05-01T12:58:24.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/courses\/1\/lessons?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/courses\/1\/lessons?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/courses\/1\/lessons",
        "per_page": 15,
        "to": 15
    }
}
```
<div id="execution-results-GETapi-courses--course--lessons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--lessons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--lessons"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--lessons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--lessons"></code></pre>
</div>
<form id="form-GETapi-courses--course--lessons" data-method="GET" data-path="api/courses/{course}/lessons" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--lessons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--lessons" onclick="tryItOut('GETapi-courses--course--lessons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--lessons" onclick="cancelTryOut('GETapi-courses--course--lessons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--lessons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/lessons</code></b>
</p>
<p>
<label id="auth-GETapi-courses--course--lessons" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-courses--course--lessons" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--lessons" data-component="url" required  hidden>
<br>
valid id course.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-courses--course--lessons" data-component="query"  hidden>
<br>
Mencari data pembelajaran/video kursus.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--lessons" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--lessons" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-courses--course--lessons" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
</form>


## Mendapatkan list data komentar pembelajaran/video kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/comments?page[number]=1&page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/comments"
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
    'https://api-brn.neosantara.co.id/api/courses/1/lessons/1/comments',
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
<div id="execution-results-GETapi-courses--course--lessons--courseLesson--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--lessons--courseLesson--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--lessons--courseLesson--comments"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--lessons--courseLesson--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--lessons--courseLesson--comments"></code></pre>
</div>
<form id="form-GETapi-courses--course--lessons--courseLesson--comments" data-method="GET" data-path="api/courses/{course}/lessons/{courseLesson}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--lessons--courseLesson--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--lessons--courseLesson--comments" onclick="tryItOut('GETapi-courses--course--lessons--courseLesson--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--lessons--courseLesson--comments" onclick="cancelTryOut('GETapi-courses--course--lessons--courseLesson--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--lessons--courseLesson--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/comments</code></b>
</p>
<p>
<label id="auth-GETapi-courses--course--lessons--courseLesson--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--lessons--courseLesson--comments" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Mendapatkan list data user yang menyukai pembelajaran/video kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/likes?page[number]=1&page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/likes"
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
    'https://api-brn.neosantara.co.id/api/courses/1/lessons/1/likes',
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
<div id="execution-results-GETapi-courses--course--lessons--courseLesson--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--lessons--courseLesson--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--lessons--courseLesson--likes"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--lessons--courseLesson--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--lessons--courseLesson--likes"></code></pre>
</div>
<form id="form-GETapi-courses--course--lessons--courseLesson--likes" data-method="GET" data-path="api/courses/{course}/lessons/{courseLesson}/likes" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--lessons--courseLesson--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--lessons--courseLesson--likes" onclick="tryItOut('GETapi-courses--course--lessons--courseLesson--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--lessons--courseLesson--likes" onclick="cancelTryOut('GETapi-courses--course--lessons--courseLesson--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--lessons--courseLesson--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/likes</code></b>
</p>
<p>
<label id="auth-GETapi-courses--course--lessons--courseLesson--likes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-courses--course--lessons--courseLesson--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>


## Menambahan komentar pembelajaran/video kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'

```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/comments"
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
    'https://api-brn.neosantara.co.id/api/courses/1/lessons/1/comments',
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
<div id="execution-results-POSTapi-courses--course--lessons--courseLesson--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--lessons--courseLesson--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--lessons--courseLesson--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--lessons--courseLesson--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--lessons--courseLesson--comments"></code></pre>
</div>
<form id="form-POSTapi-courses--course--lessons--courseLesson--comments" data-method="POST" data-path="api/courses/{course}/lessons/{courseLesson}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--lessons--courseLesson--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--lessons--courseLesson--comments" onclick="tryItOut('POSTapi-courses--course--lessons--courseLesson--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--lessons--courseLesson--comments" onclick="cancelTryOut('POSTapi-courses--course--lessons--courseLesson--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--lessons--courseLesson--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--lessons--courseLesson--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--lessons--courseLesson--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--lessons--courseLesson--comments" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="POSTapi-courses--course--lessons--courseLesson--comments" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-courses--course--lessons--courseLesson--comments" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>


## Menyukai pembelajaran/video kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/liked"
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
    'https://api-brn.neosantara.co.id/api/courses/1/lessons/1/liked',
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
 "message": "Berhasil menyukai pembelejaran/video kursus.",
}
```
<div id="execution-results-POSTapi-courses--course--lessons--courseLesson--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-courses--course--lessons--courseLesson--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courses--course--lessons--courseLesson--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-courses--course--lessons--courseLesson--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courses--course--lessons--courseLesson--liked"></code></pre>
</div>
<form id="form-POSTapi-courses--course--lessons--courseLesson--liked" data-method="POST" data-path="api/courses/{course}/lessons/{courseLesson}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-courses--course--lessons--courseLesson--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-courses--course--lessons--courseLesson--liked" onclick="tryItOut('POSTapi-courses--course--lessons--courseLesson--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-courses--course--lessons--courseLesson--liked" onclick="cancelTryOut('POSTapi-courses--course--lessons--courseLesson--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-courses--course--lessons--courseLesson--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-courses--course--lessons--courseLesson--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-courses--course--lessons--courseLesson--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="POSTapi-courses--course--lessons--courseLesson--liked" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="POSTapi-courses--course--lessons--courseLesson--liked" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
</form>


## Batalkan menyukai pembelajaran/video kursus.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api-brn.neosantara.co.id/api/courses/1/lessons/1/liked"
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
    'https://api-brn.neosantara.co.id/api/courses/1/lessons/1/liked',
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
 "message": "Berhasil membatalkan menyukai pembelejaran/video kursus.",
}
```
<div id="execution-results-DELETEapi-courses--course--lessons--courseLesson--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-courses--course--lessons--courseLesson--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-courses--course--lessons--courseLesson--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-courses--course--lessons--courseLesson--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-courses--course--lessons--courseLesson--liked"></code></pre>
</div>
<form id="form-DELETEapi-courses--course--lessons--courseLesson--liked" data-method="DELETE" data-path="api/courses/{course}/lessons/{courseLesson}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-courses--course--lessons--courseLesson--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-courses--course--lessons--courseLesson--liked" onclick="tryItOut('DELETEapi-courses--course--lessons--courseLesson--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-courses--course--lessons--courseLesson--liked" onclick="cancelTryOut('DELETEapi-courses--course--lessons--courseLesson--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-courses--course--lessons--courseLesson--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-courses--course--lessons--courseLesson--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-courses--course--lessons--courseLesson--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="DELETEapi-courses--course--lessons--courseLesson--liked" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="DELETEapi-courses--course--lessons--courseLesson--liked" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
</form>



