<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Buser Rent Car Nasional Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                            <a href="#" data-language-name="php">php</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: August 7 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Dokumentasi ini bertujuan untuk memberikan semua informasi yang Anda butuhkan untuk bekerja dengan API kami.</p>
<aside>Saat Anda menggulir, Anda akan melihat contoh kode untuk bekerja dengan API dalam berbagai bahasa pemrograman di area gelap di sebelah kanan (atau sebagai bagian dari konten di seluler).
Anda dapat mengganti bahasa yang digunakan dengan tab di kanan atas (atau dari menu navigasi di kiri atas pada ponsel).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "https://brn-api.test";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.5.3.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">https://brn-api.test</code></pre><h1>Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>Anda bisa mendapatkan token Anda dengan cara <b>Login</b>.</p><h1>Agenda</h1>
<h2>Mendapatkan list data agenda.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data agenda.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/agendas?search=Avansa&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;include=user&amp;filter[type]=HUT&amp;filter[title]=in&amp;filter[description]=animi&amp;filter[address]=labore&amp;filter[latitude]=31.2467601&amp;filter[longitude]=29.9020376&amp;filter[start_date]=2020-01-24&amp;filter[end_date]=2020-12-24&amp;filter[start_time]=12%3A00&amp;filter[end_time]=17%3A00&amp;filter[created_at]=2020-12-24" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/agendas"
);

let params = {
    "search": "Avansa",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "include": "user",
    "filter[type]": "HUT",
    "filter[title]": "in",
    "filter[description]": "animi",
    "filter[address]": "labore",
    "filter[latitude]": "31.2467601",
    "filter[longitude]": "29.9020376",
    "filter[start_date]": "2020-01-24",
    "filter[end_date]": "2020-12-24",
    "filter[start_time]": "12:00",
    "filter[end_time]": "17:00",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/agendas',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Avansa',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'include'=&gt; 'user',
            'filter[type]'=&gt; 'HUT',
            'filter[title]'=&gt; 'in',
            'filter[description]'=&gt; 'animi',
            'filter[address]'=&gt; 'labore',
            'filter[latitude]'=&gt; '31.2467601',
            'filter[longitude]'=&gt; '29.9020376',
            'filter[start_date]'=&gt; '2020-01-24',
            'filter[end_date]'=&gt; '2020-12-24',
            'filter[start_time]'=&gt; '12:00',
            'filter[end_time]'=&gt; '17:00',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
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
<h2>Mendapatkan detail data agenda.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/agendas/1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/agendas/1"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/agendas/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
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
<h2>Menambahkan agenda.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menambahkan agenda.</p>
<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
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
    -F "image=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phppUB3VW" </code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/agendas',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'area_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'type',
                'contents' =&gt; 'KOPDAR'
            ],
            [
                'name' =&gt; 'title',
                'contents' =&gt; 'Acara Kopdar BRN.'
            ],
            [
                'name' =&gt; 'description',
                'contents' =&gt; 'Datang untuk menhadiri acara kopdar BRN pada tangal ****.'
            ],
            [
                'name' =&gt; 'address',
                'contents' =&gt; 'Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara.'
            ],
            [
                'name' =&gt; 'start_date',
                'contents' =&gt; '2021-03-05'
            ],
            [
                'name' =&gt; 'end_date',
                'contents' =&gt; '2021-11-11'
            ],
            [
                'name' =&gt; 'start_time',
                'contents' =&gt; '08:00:00'
            ],
            [
                'name' =&gt; 'end_time',
                'contents' =&gt; '13:20:00'
            ],
            [
                'name' =&gt; 'location',
                'contents' =&gt; '31.2467601,29.9020376'
            ],
            [
                'name' =&gt; 'image',
                'contents' =&gt; fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phppUB3VW', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Memperbaharui salah satu agenda.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa memperbaharui salah satu agenda.</p>
<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
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
    -F "image=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpEsjcYm" </code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/agendas/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'area_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'type',
                'contents' =&gt; 'KOPDAR'
            ],
            [
                'name' =&gt; 'title',
                'contents' =&gt; 'Acara Kopdar BRN.'
            ],
            [
                'name' =&gt; 'description',
                'contents' =&gt; 'Datang untuk menhadiri acara kopdar BRN pada tangal ****.'
            ],
            [
                'name' =&gt; 'address',
                'contents' =&gt; 'Gg. Basuki Rahmat  No. 460, Gorontalo 76653, Kaltara.'
            ],
            [
                'name' =&gt; 'start_date',
                'contents' =&gt; '2021-03-05'
            ],
            [
                'name' =&gt; 'end_date',
                'contents' =&gt; '2021-11-11'
            ],
            [
                'name' =&gt; 'start_time',
                'contents' =&gt; '08:00:00'
            ],
            [
                'name' =&gt; 'end_time',
                'contents' =&gt; '13:20:00'
            ],
            [
                'name' =&gt; 'location',
                'contents' =&gt; '31.2467601,29.9020376'
            ],
            [
                'name' =&gt; 'image',
                'contents' =&gt; fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpEsjcYm', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Memperbaharui gambar agenda.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/agendas/1/image" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: multipart/form-data" \
    -F "image=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpHnprA0" </code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/agendas/1/image',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'image',
                'contents' =&gt; fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpHnprA0', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Gambar berhasil diperbaharui",
 "data": {
    "image_url" : "https:// ....."
 },
}</code></pre>
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
<h2>Menghapus salah satu agenda.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menghapus salah satu agenda.</p>
<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/agendas/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/agendas/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/agendas/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Menghapus gambar agenda.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Admin</b>, <b>Korda</b> & <b>Korwil</b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/agendas/1/image" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/agendas/1/image"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/agendas/1/image',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Absen Agenda.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/agendas/1/qr-scan" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/agendas/1/qr-scan"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/agendas/1/qr-scan',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
</form><h1>Anggota</h1>
<h2>Mendapatkan list data anggota.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/members?include=addresses%2Cpersonal-information&amp;roles=saepe&amp;filter[name]=Arya+Anggara&amp;filter[created_at]=2020-12-24&amp;guest=true" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/members"
);

let params = {
    "include": "addresses,personal-information",
    "roles": "saepe",
    "filter[name]": "Arya Anggara",
    "filter[created_at]": "2020-12-24",
    "guest": "true",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/members',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'include'=&gt; 'addresses,personal-information',
            'roles'=&gt; 'saepe',
            'filter[name]'=&gt; 'Arya Anggara',
            'filter[created_at]'=&gt; '2020-12-24',
            'guest'=&gt; 'true',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Admin Arya Anggara",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
            "created_at": "2021-05-29T08:29:44.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/members?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/members",
        "per_page": 10,
        "to": 1
    }
}</code></pre>
<div id="execution-results-GETapi-members" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-members"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-members"></code></pre>
</div>
<div id="execution-error-GETapi-members" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-members"></code></pre>
</div>
<form id="form-GETapi-members" data-method="GET" data-path="api/members" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-members', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-members" onclick="tryItOut('GETapi-members');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-members" onclick="cancelTryOut('GETapi-members');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-members" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/members</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Include akan memuat data dengan relasi, relasi yang tersedia: <br> #1 <b>roles</b> : Mendapatkan informasi wewenang pengguna <br> #2 <b>addresses</b> : Alamat yang didaftarkan. <br> #3 <b>personal-information</b> : Informasi pribadi.
</p>
<p>
<b><code>roles</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="roles" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Filter data berdasar kan role
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nama.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>guest</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="guest" data-endpoint="GETapi-members" data-component="query"  hidden>
<br>
Penyortiran berdasarkan pengguna yang belum menjadi anggota brn.
</p>
</form>
<h2>Mendapatkan detail data anggota.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/members/1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/members/1"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/members/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "points_relation_sum_points": 10,
        "roles": [
            {
                "name": "admin"
            },
            {
                "name": "member"
            }
        ],
        "name": "Arya Anggara",
        "profile_photo_path": null,
        "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
        "created_at": "2021-05-29T08:29:44.000000Z",
        "addresses": [
            {
                "id": 1,
                "label": "Default Address",
                "given_name": "Abdelrahman",
                "family_name": "Omran",
                "organization": "Rinvex",
                "country_code": "id",
                "street": "56 john doe st.",
                "state": "Alexandria",
                "city": "Alexandria",
                "postal_code": "21614",
                "latitude": 31.2467601,
                "longitude": 29.9020376,
                "is_primary": false,
                "is_billing": false,
                "is_shipping": false
            }
        ],
        "personal_information": {
            "bio": "Don`t care what you say about me I like the way I am.",
            "gender": "male",
            "date_of_birth": "2002-12-24T17:00:00.000000Z",
            "company_name": "Neosantara",
            "company_logo": null
        }
    }
}</code></pre>
<div id="execution-results-GETapi-members--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-members--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-members--user-"></code></pre>
</div>
<div id="execution-error-GETapi-members--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-members--user-"></code></pre>
</div>
<form id="form-GETapi-members--user-" data-method="GET" data-path="api/members/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-members--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-members--user-" onclick="tryItOut('GETapi-members--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-members--user-" onclick="cancelTryOut('GETapi-members--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-members--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/members/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user" data-endpoint="GETapi-members--user-" data-component="url" required  hidden>
<br>
valid id user.
</p>
</form><h1>Artikel</h1>
<h2>Mendapatkan list data artikel.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data artikel. note: <i>content</i> dilimit 100 karekter, Anda bisa melihat semua di detail artikel</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Berita+hari+ini&amp;filter[slug]=berita-hari-ini&amp;filter[created_at]=2020-12-24&amp;filter[featured]=1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[title]": "Berita hari ini",
    "filter[slug]": "berita-hari-ini",
    "filter[created_at]": "2020-12-24",
    "filter[featured]": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Berita hari ini',
            'filter[slug]'=&gt; 'berita-hari-ini',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[featured]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 16,
            "slug": "performance-checklist",
            "image": "articles\/1.jpeg",
            "image_url": "http:\/\/api.brn.com\/storage\/articles\/1.jpeg",
            "title": "The Ultimate Performance Checklist For Laravel Apps",
            "content": "We can all agree that we prefer an app that loads faster to one that's slow...",
            "status": "PUBLISHED",
            "date": "2021-04-29T17:00:00.000000Z",
            "featured": false,
            "created_at": "2021-04-30T13:45:33.000000Z",
            "updated_at": "2021-04-30T13:45:33.000000Z",
            "likes_count": 5,
            "views_count": 631,
            "comments_count": 5,
            "categories": [
                {
                    "id": 9,
                    "slug": "performance",
                    "name": "performance",
                    "description": "tips for yout aplication"
                }
            ],
            "author": {
                "roles": [
                    {
                        "name": "admin"
                    }
                ],
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
                "created_at": "2021-04-30T16:05:56.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/articles?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/articles?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/articles",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
<div id="execution-results-GETapi-articles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles"></code></pre>
</div>
<div id="execution-error-GETapi-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles"></code></pre>
</div>
<form id="form-GETapi-articles" data-method="GET" data-path="api/articles" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles" onclick="tryItOut('GETapi-articles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles" onclick="cancelTryOut('GETapi-articles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Mencari data artikel.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-articles" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1.
</p>
</form>
<h2>Mendapatkan detail data artikel.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles/1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "slug": "performance-checklist",
        "image": "articles\/1.jpeg",
        "image_url": "http:\/\/api.brn.com\/storage\/articles\/1.jpeg",
        "title": "The Ultimate Performance Checklist For Laravel Apps",
        "content": "We can all agree that we prefer an app that loads faster to one that's slow...",
        "status": "PUBLISHED",
        "date": "2021-04-29T17:00:00.000000Z",
        "featured": false,
        "created_at": "2021-04-30T13:45:33.000000Z",
        "updated_at": "2021-04-30T13:45:33.000000Z",
        "likes_count": 5,
        "views_count": 631,
        "comments_count": 5,
        "categories": [
            {
                "id": 9,
                "slug": "performance",
                "name": "performance",
                "description": "tips for yout aplication"
            }
        ],
        "author": {
            "roles": [
                {
                    "name": "admin"
                }
            ],
            "name": "Admin Arya Anggara",
            "email": "aryaanggara.dev@gmail.com",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
            "created_at": "2021-04-30T16:05:56.000000Z"
        }
    }
}</code></pre>
<div id="execution-results-GETapi-articles--article-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles--article-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles--article-"></code></pre>
</div>
<div id="execution-error-GETapi-articles--article-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles--article-"></code></pre>
</div>
<form id="form-GETapi-articles--article-" data-method="GET" data-path="api/articles/{article}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles--article-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles--article-" onclick="tryItOut('GETapi-articles--article-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles--article-" onclick="cancelTryOut('GETapi-articles--article-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles--article-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles/{article}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="GETapi-articles--article-" data-component="url" required  hidden>
<br>
valid id article.
</p>
</form>
<h2>Mendapatkan list data artikel bedasarkan kategori.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data artikel. note: <i>content</i> dilimit 100 karekter, Anda bisa melihat semua di detail artikel</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles/categories/alias?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Berita+hari+ini&amp;filter[slug]=berita-hari-ini&amp;filter[created_at]=2020-12-24&amp;filter[featured]=1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/categories/alias"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[title]": "Berita hari ini",
    "filter[slug]": "berita-hari-ini",
    "filter[created_at]": "2020-12-24",
    "filter[featured]": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles/categories/alias',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Berita hari ini',
            'filter[slug]'=&gt; 'berita-hari-ini',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[featured]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 16,
            "slug": "performance-checklist",
            "image": "articles\/1.jpeg",
            "image_url": "http:\/\/api.brn.com\/storage\/articles\/1.jpeg",
            "title": "The Ultimate Performance Checklist For Laravel Apps",
            "content": "We can all agree that we prefer an app that loads faster to one that's slow...",
            "status": "PUBLISHED",
            "date": "2021-04-29T17:00:00.000000Z",
            "featured": false,
            "created_at": "2021-04-30T13:45:33.000000Z",
            "updated_at": "2021-04-30T13:45:33.000000Z",
            "likes_count": 5,
            "views_count": 631,
            "comments_count": 5,
            "categories": [
                {
                    "id": 9,
                    "slug": "performance",
                    "name": "performance",
                    "description": "tips for yout aplication"
                }
            ],
            "author": {
                "roles": [
                    {
                        "name": "admin"
                    }
                ],
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
                "created_at": "2021-04-30T16:05:56.000000Z"
            }
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/articles?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/articles?page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/articles",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
<div id="execution-results-GETapi-articles-categories--slug-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles-categories--slug-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles-categories--slug-"></code></pre>
</div>
<div id="execution-error-GETapi-articles-categories--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles-categories--slug-"></code></pre>
</div>
<form id="form-GETapi-articles-categories--slug-" data-method="GET" data-path="api/articles/categories/{slug}" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles-categories--slug-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles-categories--slug-" onclick="tryItOut('GETapi-articles-categories--slug-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles-categories--slug-" onclick="cancelTryOut('GETapi-articles-categories--slug-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles-categories--slug-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles/categories/{slug}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="GETapi-articles-categories--slug-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Mencari data artikel.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[title]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[title]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
<p>
<b><code>filter[featured]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[featured]" data-endpoint="GETapi-articles-categories--slug-" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diunggulakan, harus berupa angka 0 atau 1.
</p>
</form>
<h2>Mendapatkan list data komentar artikel.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles/1/comments?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles/1/comments',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-articles--article--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles--article--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles--article--comments"></code></pre>
</div>
<div id="execution-error-GETapi-articles--article--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles--article--comments"></code></pre>
</div>
<form id="form-GETapi-articles--article--comments" data-method="GET" data-path="api/articles/{article}/comments" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles--article--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles--article--comments" onclick="tryItOut('GETapi-articles--article--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles--article--comments" onclick="cancelTryOut('GETapi-articles--article--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles--article--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles/{article}/comments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="GETapi-articles--article--comments" data-component="url" required  hidden>
<br>
valid id article.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-articles--article--comments" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-articles--article--comments" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Mendapatkan list data user yang menyukai artikel.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/articles/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/articles/1/likes',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-articles--article--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-articles--article--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles--article--likes"></code></pre>
</div>
<div id="execution-error-GETapi-articles--article--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles--article--likes"></code></pre>
</div>
<form id="form-GETapi-articles--article--likes" data-method="GET" data-path="api/articles/{article}/likes" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-articles--article--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-articles--article--likes" onclick="tryItOut('GETapi-articles--article--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-articles--article--likes" onclick="cancelTryOut('GETapi-articles--article--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-articles--article--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/articles/{article}/likes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="GETapi-articles--article--likes" data-component="url" required  hidden>
<br>
valid id article.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-articles--article--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-articles--article--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Menambahan komentar artikel.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/articles/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/comments"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/articles/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
<div id="execution-results-POSTapi-articles--article--comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-articles--article--comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-articles--article--comments"></code></pre>
</div>
<div id="execution-error-POSTapi-articles--article--comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-articles--article--comments"></code></pre>
</div>
<form id="form-POSTapi-articles--article--comments" data-method="POST" data-path="api/articles/{article}/comments" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-articles--article--comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-articles--article--comments" onclick="tryItOut('POSTapi-articles--article--comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-articles--article--comments" onclick="cancelTryOut('POSTapi-articles--article--comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-articles--article--comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/articles/{article}/comments</code></b>
</p>
<p>
<label id="auth-POSTapi-articles--article--comments" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-articles--article--comments" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="POSTapi-articles--article--comments" data-component="url" required  hidden>
<br>
valid id article.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-articles--article--comments" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>
<h2>Menyukai artikel.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/articles/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/articles/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai artikel.",
}</code></pre>
<div id="execution-results-POSTapi-articles--article--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-articles--article--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-articles--article--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-articles--article--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-articles--article--liked"></code></pre>
</div>
<form id="form-POSTapi-articles--article--liked" data-method="POST" data-path="api/articles/{article}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-articles--article--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-articles--article--liked" onclick="tryItOut('POSTapi-articles--article--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-articles--article--liked" onclick="cancelTryOut('POSTapi-articles--article--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-articles--article--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/articles/{article}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-articles--article--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-articles--article--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="POSTapi-articles--article--liked" data-component="url" required  hidden>
<br>
valid id article.
</p>
</form>
<h2>Batalkan menyukai artikel.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/articles/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/articles/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/articles/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai artikel.",
}</code></pre>
<div id="execution-results-DELETEapi-articles--article--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-articles--article--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-articles--article--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-articles--article--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-articles--article--liked"></code></pre>
</div>
<form id="form-DELETEapi-articles--article--liked" data-method="DELETE" data-path="api/articles/{article}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-articles--article--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-articles--article--liked" onclick="tryItOut('DELETEapi-articles--article--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-articles--article--liked" onclick="cancelTryOut('DELETEapi-articles--article--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-articles--article--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/articles/{article}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-articles--article--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-articles--article--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>article</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="article" data-endpoint="DELETEapi-articles--article--liked" data-component="url" required  hidden>
<br>
valid id article.
</p>
</form><h1>BlackList</h1>
<h2>Mendapatkan list data blacklist.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/perpetrators?search=Tasik&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[name]=Arya&amp;filter[nik]=123123123&amp;filter[created_at]=2020-12-24" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/perpetrators"
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/perpetrators',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Tasik',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[name]'=&gt; 'Arya',
            'filter[nik]'=&gt; '123123123',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
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
<h2>Mendapatkan detail data blacklist.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/perpetrators/1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/perpetrators/1"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/perpetrators/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
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
</form><h1>Daerah</h1>
<h2>Mendapatkan list data daerah yang tersedia.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/areas?search=Tasik&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[area]=Tasik&amp;filter[created_at]=2020-12-24" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/areas"
);

let params = {
    "search": "Tasik",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[area]": "Tasik",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/areas',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Tasik',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[area]'=&gt; 'Tasik',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "region_id": 1,
            "area": "Tasikmalaya",
            "created_at": "2021-07-01T14:41:16.000000Z",
            "updated_at": "2021-07-01T14:41:16.000000Z"
        },
        {
            "id": 2,
            "region_id": 1,
            "area": "Bandung",
            "created_at": "2021-07-01T14:41:16.000000Z",
            "updated_at": "2021-07-01T14:41:16.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/regions\/1\/areas?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/regions\/1\/areas",
        "per_page": 15,
        "to": 2
    }
}</code></pre>
<div id="execution-results-GETapi-areas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-areas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-areas"></code></pre>
</div>
<div id="execution-error-GETapi-areas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-areas"></code></pre>
</div>
<form id="form-GETapi-areas" data-method="GET" data-path="api/areas" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-areas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-areas" onclick="tryItOut('GETapi-areas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-areas" onclick="cancelTryOut('GETapi-areas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-areas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/areas</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Mencari data daerah.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[area]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[area]" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nana daerah.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-areas" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form><h1>Daily Check in</h1>
<h2>Check in hari ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/check-in" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/check-in"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/check-in',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil check in hari ini.",
}</code></pre>
<div id="execution-results-GETapi-check-in" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-check-in"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-check-in"></code></pre>
</div>
<div id="execution-error-GETapi-check-in" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-check-in"></code></pre>
</div>
<form id="form-GETapi-check-in" data-method="GET" data-path="api/check-in" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-check-in', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-check-in" onclick="tryItOut('GETapi-check-in');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-check-in" onclick="cancelTryOut('GETapi-check-in');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-check-in" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/check-in</code></b>
</p>
<p>
<label id="auth-GETapi-check-in" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-check-in" data-component="header"></label>
</p>
</form><h1>Donasi</h1>
<h2>Mendapatkan list data donasi yang tersedia.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/donations?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Berita+hari+ini&amp;filter[created_at]=2020-12-24&amp;filter[donated_at]=2020-12-24" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/donations"
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/donations',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Berita hari ini',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[donated_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
</form><h1>Firebase</h1>
<h2>Memperbaharui device token.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/firebase/device-token" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"device_token":"cSN1fH..."}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/firebase/device-token"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "device_token": "cSN1fH..."
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/firebase/device-token',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'device_token' =&gt; 'cSN1fH...',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil memperbaharui device token.",
}</code></pre>
<div id="execution-results-POSTapi-firebase-device-token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-firebase-device-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-firebase-device-token"></code></pre>
</div>
<div id="execution-error-POSTapi-firebase-device-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-firebase-device-token"></code></pre>
</div>
<form id="form-POSTapi-firebase-device-token" data-method="POST" data-path="api/firebase/device-token" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-firebase-device-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-firebase-device-token" onclick="tryItOut('POSTapi-firebase-device-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-firebase-device-token" onclick="cancelTryOut('POSTapi-firebase-device-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-firebase-device-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/firebase/device-token</code></b>
</p>
<p>
<label id="auth-POSTapi-firebase-device-token" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-firebase-device-token" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>device_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="device_token" data-endpoint="POSTapi-firebase-device-token" data-component="body" required  hidden>
<br>
device token.
</p>

</form><h1>Forum Diskusi</h1>
<h2>Mendapatkan list data diskusi pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data diskusi pengguna saat ini. note: <i>description</i> dilimit 100 karekter, Anda bisa melihat semua di detail diskusi.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-discussions?only=case-reports&amp;search=Mobil+baru&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Mobil+baru&amp;filter[slug]=mobil-baru&amp;filter[created_at]=2020-12-24&amp;filter[featured]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-discussions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'only'=&gt; 'case-reports',
            'search'=&gt; 'Mobil baru',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Mobil baru',
            'filter[slug]'=&gt; 'mobil-baru',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[featured]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan list semua data diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list semua data diskus. note: <i>description</i> dilimit 100 karekter, Anda bisa melihat semua di detail diskusi.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions?only=case-reports&amp;search=Mobil+baru&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[title]=Mobil+baru&amp;filter[slug]=mobil-baru&amp;filter[created_at]=2020-12-24&amp;filter[featured]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'only'=&gt; 'case-reports',
            'search'=&gt; 'Mobil baru',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[title]'=&gt; 'Mobil baru',
            'filter[slug]'=&gt; 'mobil-baru',
            'filter[created_at]'=&gt; '2020-12-24',
            'filter[featured]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan detail data diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
            "created_at": "2021-05-18T06:44:10.000000Z"
        },
        "case_report": null
    }
}</code></pre>
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
<h2>Menambahkan diskusi pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menambahkan diskusi pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"title":"diskusi tentang rental mobil","description":"amet"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "title": "diskusi tentang rental mobil",
    "description": "amet"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'title' =&gt; 'diskusi tentang rental mobil',
            'description' =&gt; 'amet',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Menambahkan diskusi untuk laporan kasus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/case-report" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"invite_user_ids":1,"case_report_id":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/case-report',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'invite_user_ids' =&gt; 1,
            'case_report_id' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Mendapatkan list data member diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions/1/case-report/members?search=Arya+Anggara&amp;page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/case-report/members"
);

let params = {
    "search": "Arya Anggara",
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Arya Anggara',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
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
<h2>Menambahkan member diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/1/case-report/members" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"user_ids":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_ids' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Mengeluarkan member diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/discussions/1/case-report/members" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"user_ids":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/discussions/1/case-report/members',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'user_ids' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Memperbaharui salah satu diskusi pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa memperbaharui salah satu diskusi pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"title":"diskusi tentang rental mobil","description":"libero"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "title": "diskusi tentang rental mobil",
    "description": "libero"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'title' =&gt; 'diskusi tentang rental mobil',
            'description' =&gt; 'libero',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Menghapus salah satu diskusi pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menghapus salah satu diskusi pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/discussions/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/discussions/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Menandai diskusi sebagai selesai.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Setelah Anda menandai diskusi sebagai selesai pengguna lain tidak akan bisa menambahkan komentar.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://brn-api.test/api/discussions/1/set-finish" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/set-finish"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;patch(
    'https://brn-api.test/api/discussions/1/set-finish',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Mendapatkan list data komentar diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions/1/comments?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan list data user yang menyukai diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/discussions/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/discussions/1/likes',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Menambahan komentar diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
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
<h2>Menyukai diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/discussions/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/discussions/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai diskusi.",
}</code></pre>
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
<h2>Batalkan menyukai diskusi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/discussions/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/discussions/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/discussions/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai diskusi.",
}</code></pre>
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
</form><h1>Kategori</h1>
<h2>Mendapatkan list kategori.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data kategori.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/categories?search=motivasi&amp;page[number]=2&amp;page[size]=2&amp;sort=name&amp;filter[name]=motivasi&amp;filter[slug]=motivasi" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/categories"
);

let params = {
    "search": "motivasi",
    "page[number]": "2",
    "page[size]": "2",
    "sort": "name",
    "filter[name]": "motivasi",
    "filter[slug]": "motivasi",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/categories',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'motivasi',
            'page[number]'=&gt; '2',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'name',
            'filter[name]'=&gt; 'motivasi',
            'filter[slug]'=&gt; 'motivasi',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 2,
            "slug": "Motivasi",
            "name": "Motivasi untuk pantang menyerah",
            "description": null
        },
        {
            "id": 1,
            "slug": "Berita",
            "name": "Bertia terbaru",
            "description": null
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/categories?page=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/categories",
        "per_page": 15,
        "to": 9
    }
}</code></pre>
<div id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"></code></pre>
</div>
<div id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories"></code></pre>
</div>
<form id="form-GETapi-categories" data-method="GET" data-path="api/categories" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-categories" onclick="tryItOut('GETapi-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-categories" onclick="cancelTryOut('GETapi-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Mencari data kategori.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -name.
</p>
<p>
<b><code>filter[name]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[name]" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nama.
</p>
<p>
<b><code>filter[slug]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[slug]" data-endpoint="GETapi-categories" data-component="query"  hidden>
<br>
Penyortiran berdasarkan slug.
</p>
</form><h1>Kelola Mobil</h1>
<h2>Mendapatkan list data warna mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/colors?search=merah&amp;page[number]=1&amp;page[size]=2&amp;sort=-color" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/colors"
);

let params = {
    "search": "merah",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-color",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/colors',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'merah',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-color',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "color": "Phantom Black"
        },
        {
            "id": 2,
            "color": "Sepang Blue"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/colors?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/colors",
        "per_page": 15,
        "to": 2
    }
}</code></pre>
<div id="execution-results-GETapi-cars-colors" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-colors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-colors"></code></pre>
</div>
<div id="execution-error-GETapi-cars-colors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-colors"></code></pre>
</div>
<form id="form-GETapi-cars-colors" data-method="GET" data-path="api/cars/colors" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-colors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-colors" onclick="tryItOut('GETapi-cars-colors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-colors" onclick="cancelTryOut('GETapi-cars-colors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-colors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/colors</code></b>
</p>
<p>
<label id="auth-GETapi-cars-colors" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-colors" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-colors" data-component="query"  hidden>
<br>
Mencari data warna mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-colors" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-colors" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-colors" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default color.
</p>
</form>
<h2>Mendapatkan list data produsen mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/makes?search=BMW&amp;page[number]=1&amp;page[size]=2&amp;sort=-make" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/makes"
);

let params = {
    "search": "BMW",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-make",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/makes',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'BMW',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-make',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "fuel": "Audi"
        },
        {
            "id": 2,
            "fuel": "BMW"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/makes?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/makes",
        "per_page": 15,
        "to": 2
    }
}</code></pre>
<div id="execution-results-GETapi-cars-makes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-makes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-makes"></code></pre>
</div>
<div id="execution-error-GETapi-cars-makes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-makes"></code></pre>
</div>
<form id="form-GETapi-cars-makes" data-method="GET" data-path="api/cars/makes" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-makes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-makes" onclick="tryItOut('GETapi-cars-makes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-makes" onclick="cancelTryOut('GETapi-cars-makes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-makes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/makes</code></b>
</p>
<p>
<label id="auth-GETapi-cars-makes" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-makes" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-makes" data-component="query"  hidden>
<br>
Mencari data produsen mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-makes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-makes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-makes" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default make.
</p>
</form>
<h2>Mendapatkan list data model mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/models?search=S40&amp;page[number]=1&amp;page[size]=2&amp;sort=-model&amp;filter[car_make_id]=1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/models"
);

let params = {
    "search": "S40",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-model",
    "filter[car_make_id]": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/models',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'S40',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-model',
            'filter[car_make_id]'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "fuel": "S40"
        },
        {
            "id": 2,
            "fuel": "118D"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/models?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/models",
        "per_page": 15,
        "to": 2
    }
}</code></pre>
<div id="execution-results-GETapi-cars-models" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-models"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-models"></code></pre>
</div>
<div id="execution-error-GETapi-cars-models" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-models"></code></pre>
</div>
<form id="form-GETapi-cars-models" data-method="GET" data-path="api/cars/models" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-models', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-models" onclick="tryItOut('GETapi-cars-models');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-models" onclick="cancelTryOut('GETapi-cars-models');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-models" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/models</code></b>
</p>
<p>
<label id="auth-GETapi-cars-models" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-models" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Mencari data model mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default model.
</p>
<p>
<b><code>filter[car_make_id]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[car_make_id]" data-endpoint="GETapi-cars-models" data-component="query"  hidden>
<br>
Penyortiran berdasarkan id mobil.
</p>
</form>
<h2>Mendapatkan list data jenis kelas mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/types?search=Sedan&amp;page[number]=1&amp;page[size]=2&amp;sort=-class" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/types"
);

let params = {
    "search": "Sedan",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-class",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/types',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Sedan',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-class',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 3,
            "class": "Compact"
        },
        {
            "id": 2,
            "class": "Middle"
        },
        {
            "id": 1,
            "class": "Premium"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/types?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/types",
        "per_page": 15,
        "to": 3
    }
}</code></pre>
<div id="execution-results-GETapi-cars-types" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-types"></code></pre>
</div>
<div id="execution-error-GETapi-cars-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-types"></code></pre>
</div>
<form id="form-GETapi-cars-types" data-method="GET" data-path="api/cars/types" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-types" onclick="tryItOut('GETapi-cars-types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-types" onclick="cancelTryOut('GETapi-cars-types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/types</code></b>
</p>
<p>
<label id="auth-GETapi-cars-types" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-types" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-types" data-component="query"  hidden>
<br>
Mencari data jenis kelas mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-types" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-types" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-types" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default class.
</p>
</form>
<h2>Mendapatkan list data bahan bakar mobil.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/cars/fuels?search=Diesel&amp;page[number]=1&amp;page[size]=2&amp;sort=-fuel" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/cars/fuels"
);

let params = {
    "search": "Diesel",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "-fuel",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/cars/fuels',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Diesel',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; '-fuel',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "fuel": "Diesel"
        },
        {
            "id": 2,
            "fuel": "Gasoline"
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/cars\/fuels?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/cars\/fuels",
        "per_page": 15,
        "to": 2
    }
}</code></pre>
<div id="execution-results-GETapi-cars-fuels" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cars-fuels"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cars-fuels"></code></pre>
</div>
<div id="execution-error-GETapi-cars-fuels" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cars-fuels"></code></pre>
</div>
<form id="form-GETapi-cars-fuels" data-method="GET" data-path="api/cars/fuels" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cars-fuels', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cars-fuels" onclick="tryItOut('GETapi-cars-fuels');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cars-fuels" onclick="cancelTryOut('GETapi-cars-fuels');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cars-fuels" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cars/fuels</code></b>
</p>
<p>
<label id="auth-GETapi-cars-fuels" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-cars-fuels" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-cars-fuels" data-component="query"  hidden>
<br>
Mencari data bahan bakar mobil.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-cars-fuels" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-cars-fuels" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-cars-fuels" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default fuel.
</p>
</form>
<h2>Mendapatkan list data mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data mobil pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-cars?search=Avansa&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;include=carImages&amp;filter[status]=lost&amp;filter[is_approved]=true&amp;filter[police_number]=Y+3168+XP&amp;filter[year]=2015&amp;filter[is_automatic]=true&amp;filter[capacity]=4&amp;filter[equipment]=exercitationem&amp;filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars"
);

let params = {
    "search": "Avansa",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "include": "carImages",
    "filter[status]": "lost",
    "filter[is_approved]": "true",
    "filter[police_number]": "Y 3168 XP",
    "filter[year]": "2015",
    "filter[is_automatic]": "true",
    "filter[capacity]": "4",
    "filter[equipment]": "exercitationem",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-cars',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Avansa',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'include'=&gt; 'carImages',
            'filter[status]'=&gt; 'lost',
            'filter[is_approved]'=&gt; 'true',
            'filter[police_number]'=&gt; 'Y 3168 XP',
            'filter[year]'=&gt; '2015',
            'filter[is_automatic]'=&gt; 'true',
            'filter[capacity]'=&gt; '4',
            'filter[equipment]'=&gt; 'exercitationem',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 24,
            "user_id": 1,
            "status": "lost",
            "is_approved": true,
            "police_number": "K 7998 UG",
            "year": 1984,
            "is_automatic": false,
            "capacity": 2,
            "equipment": null,
            "created_at": "2021-05-05T12:26:50.000000Z",
            "updated_at": "2021-05-05T12:26:50.000000Z",
            "car_make": {
                "id": 3,
                "make": "BMW"
            },
            "car_type": {
                "id": 1,
                "class": "Premium"
            },
            "car_fuel": {
                "id": 3,
                "fuel": "Electric"
            },
            "car_model": {
                "id": 1,
                "car_make_id": 1,
                "model": "A4"
            },
            "car_color": {
                "id": 1,
                "color": "Phantom Black"
            },
            "car_images": [
                {
                    "id": 47,
                    "car_id": 24,
                    "image": "\/cars\/628078224-K7998UG.png",
                    "image_url": "http:\/\/api.brn.com\/storage\/cars\/628078224-K7998UG.png"
                },
                {
                    "id": 48,
                    "car_id": 24,
                    "image": "\/cars\/194609309-K7998UG.png",
                    "image_url": "http:\/\/api.brn.com\/storage\/cars\/194609309-K7998UG.png"
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/api.brn.com\/api\/my-cars?include=carMake%2CcarType%2CcarFuel%2CcarModel%2CcarColor%2CcarImages&amp;page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": "http:\/\/api.brn.com\/api\/my-cars?include=carMake%2CcarType%2CcarFuel%2CcarModel%2CcarColor%2CcarImages&amp;page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "http:\/\/api.brn.com\/api\/my-cars",
        "per_page": 15,
        "to": 15
    }
}</code></pre>
<div id="execution-results-GETapi-my-cars" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-cars"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-cars"></code></pre>
</div>
<div id="execution-error-GETapi-my-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-cars"></code></pre>
</div>
<form id="form-GETapi-my-cars" data-method="GET" data-path="api/my-cars" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-cars', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-cars" onclick="tryItOut('GETapi-my-cars');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-cars" onclick="cancelTryOut('GETapi-my-cars');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-cars" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-cars</code></b>
</p>
<p>
<label id="auth-GETapi-my-cars" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-cars" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Mencari data mobil pengguna saat ini.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Include akan memuat relasi, relasi yang tersedia: <br> #1 <b>carMake</b> : Produsen mobil. <br> #2 <b>carType</b> : Jenis kelas. <br> #3 <b>carFuel</b> : Bahan bakar. <br> #4 <b>carModel</b> : Model mobil. <br> #5 <b>carColor</b> : Warna. <br> #6 <b>carImages</b> : List gambar mobil. <br>Untuk <b>multiple include</b> Anda cukup menambahkan <i>koma</i> (,).
</p>
<p>
<b><code>filter[status]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[status]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan status.
</p>
<p>
<b><code>filter[is_approved]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[is_approved]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan diterima (1=true 0=false).
</p>
<p>
<b><code>filter[police_number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[police_number]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nomor polisi.
</p>
<p>
<b><code>filter[year]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[year]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tahun mobil.
</p>
<p>
<b><code>filter[is_automatic]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[is_automatic]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan is automatic (1=true 0=false).
</p>
<p>
<b><code>filter[capacity]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[capacity]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan kapasitas.
</p>
<p>
<b><code>filter[equipment]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[equipment]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan equipment.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-cars" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>
<h2>Mendapatkan detail data mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-cars/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 24,
        "user_id": 1,
        "status": "lost",
        "is_approved": true,
        "police_number": "K 7998 UG",
        "year": 1984,
        "is_automatic": false,
        "capacity": 2,
        "equipment": null,
        "created_at": "2021-05-05T12:26:50.000000Z",
        "updated_at": "2021-05-05T12:26:50.000000Z",
        "car_make": {
            "id": 3,
            "make": "BMW"
        },
        "car_type": {
            "id": 1,
            "class": "Premium"
        },
        "car_fuel": {
            "id": 3,
            "fuel": "Electric"
        },
        "car_model": {
            "id": 1,
            "car_make_id": 1,
            "model": "A4"
        },
        "car_color": {
            "id": 1,
            "color": "Phantom Black"
        },
        "car_images": [
            {
                "id": 47,
                "car_id": 24,
                "image": "\/cars\/628078224-K7998UG.png",
                "image_url": "http:\/\/api.brn.com\/storage\/cars\/628078224-K7998UG.png"
            },
            {
                "id": 48,
                "car_id": 24,
                "image": "\/cars\/194609309-K7998UG.png",
                "image_url": "http:\/\/api.brn.com\/storage\/cars\/194609309-K7998UG.png"
            }
        ]
    }
}</code></pre>
<div id="execution-results-GETapi-my-cars--car-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-my-cars--car-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-my-cars--car-"></code></pre>
</div>
<div id="execution-error-GETapi-my-cars--car-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-my-cars--car-"></code></pre>
</div>
<form id="form-GETapi-my-cars--car-" data-method="GET" data-path="api/my-cars/{car}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-my-cars--car-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-my-cars--car-" onclick="tryItOut('GETapi-my-cars--car-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-my-cars--car-" onclick="cancelTryOut('GETapi-my-cars--car-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-my-cars--car-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/my-cars/{car}</code></b>
</p>
<p>
<label id="auth-GETapi-my-cars--car-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-my-cars--car-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>car</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car" data-endpoint="GETapi-my-cars--car-" data-component="url" required  hidden>
<br>
valid id car.
</p>
</form>
<h2>Menambahkan mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menambahkan mobil pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/my-cars" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"car_make_id":1,"car_type_id":1,"car_fuel_id":1,"car_model_id":1,"car_color_id":1,"police_number":"K 7998 UG","year":"2015","is_automatic":false,"capacity":"4","equipment":"est","files":[{"image":"path"},{"image":"path"}],"stnk_image":"perferendis","machine_number":"est","chassis_number":"labore"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "car_make_id": 1,
    "car_type_id": 1,
    "car_fuel_id": 1,
    "car_model_id": 1,
    "car_color_id": 1,
    "police_number": "K 7998 UG",
    "year": "2015",
    "is_automatic": false,
    "capacity": "4",
    "equipment": "est",
    "files": [
        {
            "image": "path"
        },
        {
            "image": "path"
        }
    ],
    "stnk_image": "perferendis",
    "machine_number": "est",
    "chassis_number": "labore"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/my-cars',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'car_make_id' =&gt; 1,
            'car_type_id' =&gt; 1,
            'car_fuel_id' =&gt; 1,
            'car_model_id' =&gt; 1,
            'car_color_id' =&gt; 1,
            'police_number' =&gt; 'K 7998 UG',
            'year' =&gt; '2015',
            'is_automatic' =&gt; false,
            'capacity' =&gt; '4',
            'equipment' =&gt; 'est',
            'files' =&gt; [
                [
                    'image' =&gt; 'path',
                ],
                [
                    'image' =&gt; 'path',
                ],
            ],
            'stnk_image' =&gt; 'perferendis',
            'machine_number' =&gt; 'est',
            'chassis_number' =&gt; 'labore',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-POSTapi-my-cars" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-my-cars"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-my-cars"></code></pre>
</div>
<div id="execution-error-POSTapi-my-cars" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-my-cars"></code></pre>
</div>
<form id="form-POSTapi-my-cars" data-method="POST" data-path="api/my-cars" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-my-cars', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-my-cars" onclick="tryItOut('POSTapi-my-cars');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-my-cars" onclick="cancelTryOut('POSTapi-my-cars');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-my-cars" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/my-cars</code></b>
</p>
<p>
<label id="auth-POSTapi-my-cars" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-my-cars" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>car_make_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_make_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carMake</b>.
</p>
<p>
<b><code>car_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_type_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carType</b>.
</p>
<p>
<b><code>car_fuel_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_fuel_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carFuel</b>.
</p>
<p>
<b><code>car_model_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_model_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carModel</b>.
</p>
<p>
<b><code>car_color_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_color_id" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
valid id <b>carColor</b>.
</p>
<p>
<b><code>police_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="police_number" data-endpoint="POSTapi-my-cars" data-component="body" required  hidden>
<br>
nomor polisi.
</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="year" data-endpoint="POSTapi-my-cars" data-component="body" required  hidden>
<br>
tahun.
</p>
<p>
<b><code>is_automatic</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-my-cars" hidden><input type="radio" name="is_automatic" value="true" data-endpoint="POSTapi-my-cars" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-my-cars" hidden><input type="radio" name="is_automatic" value="false" data-endpoint="POSTapi-my-cars" data-component="body" required ><code>false</code></label>
<br>
apakah automatic?.
</p>
<p>
<b><code>capacity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="capacity" data-endpoint="POSTapi-my-cars" data-component="body" required  hidden>
<br>
kapasitas mobil.
</p>
<p>
<b><code>equipment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="equipment" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
eqipment.
</p>
<p>
<details>
<summary>
<b><code>files</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>
List gambar.
</summary>
<br>
<p>
<b><code>files[].image</code></b>&nbsp;&nbsp;<small>image</small>     <i>optional</i> &nbsp;
<input type="text" name="files.0.image" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
file gambar.
</p>
</details>
</p>
<p>
<b><code>stnk_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="stnk_image" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
Fotor/Gambar STNK.
</p>
<p>
<b><code>machine_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="machine_number" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
Nomor Mesin.
</p>
<p>
<b><code>chassis_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="chassis_number" data-endpoint="POSTapi-my-cars" data-component="body"  hidden>
<br>
Nomor Rangka.
</p>

</form>
<h2>Memperbaharui salah satu mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa memperbaharui salah satu mobil pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"car_make_id":1,"car_type_id":1,"car_fuel_id":1,"car_model_id":1,"car_color_id":1,"police_number":"K 7998 UG","year":"2015","is_automatic":false,"capacity":"4","equipment":"esse","files":[{"image":"path"},[]],"stnk_image":"itaque","machine_number":"aut","chassis_number":"est"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "car_make_id": 1,
    "car_type_id": 1,
    "car_fuel_id": 1,
    "car_model_id": 1,
    "car_color_id": 1,
    "police_number": "K 7998 UG",
    "year": "2015",
    "is_automatic": false,
    "capacity": "4",
    "equipment": "esse",
    "files": [
        {
            "image": "path"
        },
        []
    ],
    "stnk_image": "itaque",
    "machine_number": "aut",
    "chassis_number": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/my-cars/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'car_make_id' =&gt; 1,
            'car_type_id' =&gt; 1,
            'car_fuel_id' =&gt; 1,
            'car_model_id' =&gt; 1,
            'car_color_id' =&gt; 1,
            'police_number' =&gt; 'K 7998 UG',
            'year' =&gt; '2015',
            'is_automatic' =&gt; false,
            'capacity' =&gt; '4',
            'equipment' =&gt; 'esse',
            'files' =&gt; [
                [
                    'image' =&gt; 'path',
                ],
                [],
            ],
            'stnk_image' =&gt; 'itaque',
            'machine_number' =&gt; 'aut',
            'chassis_number' =&gt; 'est',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-POSTapi-my-cars--car-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-my-cars--car-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-my-cars--car-"></code></pre>
</div>
<div id="execution-error-POSTapi-my-cars--car-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-my-cars--car-"></code></pre>
</div>
<form id="form-POSTapi-my-cars--car-" data-method="POST" data-path="api/my-cars/{car}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-my-cars--car-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-my-cars--car-" onclick="tryItOut('POSTapi-my-cars--car-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-my-cars--car-" onclick="cancelTryOut('POSTapi-my-cars--car-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-my-cars--car-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/my-cars/{car}</code></b>
</p>
<p>
<label id="auth-POSTapi-my-cars--car-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-my-cars--car-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>car</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car" data-endpoint="POSTapi-my-cars--car-" data-component="url" required  hidden>
<br>
valid id car. Defaults to 'id'.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>car_make_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_make_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carMake</b>.
</p>
<p>
<b><code>car_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_type_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carType</b>.
</p>
<p>
<b><code>car_fuel_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_fuel_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carFuel</b>.
</p>
<p>
<b><code>car_model_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_model_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carModel</b>.
</p>
<p>
<b><code>car_color_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="car_color_id" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
valid id <b>carColor</b>.
</p>
<p>
<b><code>police_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="police_number" data-endpoint="POSTapi-my-cars--car-" data-component="body" required  hidden>
<br>
nomor polisi.
</p>
<p>
<b><code>year</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="year" data-endpoint="POSTapi-my-cars--car-" data-component="body" required  hidden>
<br>
tahun.
</p>
<p>
<b><code>is_automatic</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-my-cars--car-" hidden><input type="radio" name="is_automatic" value="true" data-endpoint="POSTapi-my-cars--car-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-my-cars--car-" hidden><input type="radio" name="is_automatic" value="false" data-endpoint="POSTapi-my-cars--car-" data-component="body" required ><code>false</code></label>
<br>
apakah automatic?.
</p>
<p>
<b><code>capacity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="capacity" data-endpoint="POSTapi-my-cars--car-" data-component="body" required  hidden>
<br>
kapasitas mobil.
</p>
<p>
<b><code>equipment</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="equipment" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
eqipment.
</p>
<p>
<details>
<summary>
<b><code>files</code></b>&nbsp;&nbsp;<small>object[]</small>     <i>optional</i> &nbsp;
<br>
List gambar.
</summary>
<br>
<p>
<b><code>files[].image</code></b>&nbsp;&nbsp;<small>image</small>     <i>optional</i> &nbsp;
<input type="text" name="files.0.image" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
file gambar.
</p>
</details>
</p>
<p>
<b><code>stnk_image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="stnk_image" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
Fotor/Gambar STNK.
</p>
<p>
<b><code>machine_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="machine_number" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
Nomor Mesin.
</p>
<p>
<b><code>chassis_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="chassis_number" data-endpoint="POSTapi-my-cars--car-" data-component="body"  hidden>
<br>
Nomor Rangka.
</p>

</form>
<h2>Menghapus salah satu mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menghapus salah satu mobil pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/my-cars/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/my-cars/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-DELETEapi-my-cars--car-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-my-cars--car-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-my-cars--car-"></code></pre>
</div>
<div id="execution-error-DELETEapi-my-cars--car-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-my-cars--car-"></code></pre>
</div>
<form id="form-DELETEapi-my-cars--car-" data-method="DELETE" data-path="api/my-cars/{car}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-my-cars--car-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-my-cars--car-" onclick="tryItOut('DELETEapi-my-cars--car-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-my-cars--car-" onclick="cancelTryOut('DELETEapi-my-cars--car-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-my-cars--car-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/my-cars/{car}</code></b>
</p>
<p>
<label id="auth-DELETEapi-my-cars--car-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-my-cars--car-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>car</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="car" data-endpoint="DELETEapi-my-cars--car-" data-component="url" required  hidden>
<br>
valid id car. Defaults to 'id'.
</p>
</form>
<h2>Menghapus salah satu gambar mobil pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menghapus salah satu gambar mobil pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/my-cars/car-images/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-cars/car-images/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/my-cars/car-images/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
<div id="execution-results-DELETEapi-my-cars-car-images--carImage-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-my-cars-car-images--carImage-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-my-cars-car-images--carImage-"></code></pre>
</div>
<div id="execution-error-DELETEapi-my-cars-car-images--carImage-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-my-cars-car-images--carImage-"></code></pre>
</div>
<form id="form-DELETEapi-my-cars-car-images--carImage-" data-method="DELETE" data-path="api/my-cars/car-images/{carImage}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-my-cars-car-images--carImage-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-my-cars-car-images--carImage-" onclick="tryItOut('DELETEapi-my-cars-car-images--carImage-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-my-cars-car-images--carImage-" onclick="cancelTryOut('DELETEapi-my-cars-car-images--carImage-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-my-cars-car-images--carImage-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/my-cars/car-images/{carImage}</code></b>
</p>
<p>
<label id="auth-DELETEapi-my-cars-car-images--carImage-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-my-cars-car-images--carImage-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>carImage</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="carImage" data-endpoint="DELETEapi-my-cars-car-images--carImage-" data-component="url" required  hidden>
<br>
valid id carImage. Defaults to 'id'.
</p>
</form><h1>Komentar</h1>
<h2>Mendapatkan list data user yang menyukai komentar.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/comments/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/comments/1/likes',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-comments--comment--likes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-comments--comment--likes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comments--comment--likes"></code></pre>
</div>
<div id="execution-error-GETapi-comments--comment--likes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comments--comment--likes"></code></pre>
</div>
<form id="form-GETapi-comments--comment--likes" data-method="GET" data-path="api/comments/{comment}/likes" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-comments--comment--likes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-comments--comment--likes" onclick="tryItOut('GETapi-comments--comment--likes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-comments--comment--likes" onclick="cancelTryOut('GETapi-comments--comment--likes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-comments--comment--likes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/comments/{comment}/likes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="GETapi-comments--comment--likes" data-component="url" required  hidden>
<br>
valid id comment.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-comments--comment--likes" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-comments--comment--likes" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Mendapatkan list data balasan komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/comments/1/replies?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/replies"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/comments/1/replies',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
<div id="execution-results-GETapi-comments--comment--replies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-comments--comment--replies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-comments--comment--replies"></code></pre>
</div>
<div id="execution-error-GETapi-comments--comment--replies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-comments--comment--replies"></code></pre>
</div>
<form id="form-GETapi-comments--comment--replies" data-method="GET" data-path="api/comments/{comment}/replies" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-comments--comment--replies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-comments--comment--replies" onclick="tryItOut('GETapi-comments--comment--replies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-comments--comment--replies" onclick="cancelTryOut('GETapi-comments--comment--replies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-comments--comment--replies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/comments/{comment}/replies</code></b>
</p>
<p>
<label id="auth-GETapi-comments--comment--replies" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-comments--comment--replies" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="GETapi-comments--comment--replies" data-component="url" required  hidden>
<br>
valid id comment.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-comments--comment--replies" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-comments--comment--replies" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
<h2>Menambahan Balasan Komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/comments/1/replies" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/replies"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/comments/1/replies',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
<div id="execution-results-POSTapi-comments--comment--replies" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-comments--comment--replies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-comments--comment--replies"></code></pre>
</div>
<div id="execution-error-POSTapi-comments--comment--replies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-comments--comment--replies"></code></pre>
</div>
<form id="form-POSTapi-comments--comment--replies" data-method="POST" data-path="api/comments/{comment}/replies" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-comments--comment--replies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-comments--comment--replies" onclick="tryItOut('POSTapi-comments--comment--replies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-comments--comment--replies" onclick="cancelTryOut('POSTapi-comments--comment--replies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-comments--comment--replies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/comments/{comment}/replies</code></b>
</p>
<p>
<label id="auth-POSTapi-comments--comment--replies" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-comments--comment--replies" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="POSTapi-comments--comment--replies" data-component="url" required  hidden>
<br>
valid id comment.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-comments--comment--replies" data-component="body" required  hidden>
<br>
isi komentar.
</p>

</form>
<h2>Menghapus komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/comments/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/comments/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menghapus komentar.",
}</code></pre>
<div id="execution-results-DELETEapi-comments--comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-comments--comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-comments--comment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-comments--comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-comments--comment-"></code></pre>
</div>
<form id="form-DELETEapi-comments--comment-" data-method="DELETE" data-path="api/comments/{comment}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-comments--comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-comments--comment-" onclick="tryItOut('DELETEapi-comments--comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-comments--comment-" onclick="cancelTryOut('DELETEapi-comments--comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-comments--comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/comments/{comment}</code></b>
</p>
<p>
<label id="auth-DELETEapi-comments--comment-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-comments--comment-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="DELETEapi-comments--comment-" data-component="url" required  hidden>
<br>
valid id comment.
</p>
</form>
<h2>Menyukai komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/comments/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/comments/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai komentar.",
}</code></pre>
<div id="execution-results-POSTapi-comments--comment--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-comments--comment--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-comments--comment--liked"></code></pre>
</div>
<div id="execution-error-POSTapi-comments--comment--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-comments--comment--liked"></code></pre>
</div>
<form id="form-POSTapi-comments--comment--liked" data-method="POST" data-path="api/comments/{comment}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-comments--comment--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-comments--comment--liked" onclick="tryItOut('POSTapi-comments--comment--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-comments--comment--liked" onclick="cancelTryOut('POSTapi-comments--comment--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-comments--comment--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/comments/{comment}/liked</code></b>
</p>
<p>
<label id="auth-POSTapi-comments--comment--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-comments--comment--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="POSTapi-comments--comment--liked" data-component="url" required  hidden>
<br>
valid id comment.
</p>
</form>
<h2>Batalkan menyukai komentar.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/comments/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/comments/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/comments/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai komentar.",
}</code></pre>
<div id="execution-results-DELETEapi-comments--comment--liked" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-comments--comment--liked"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-comments--comment--liked"></code></pre>
</div>
<div id="execution-error-DELETEapi-comments--comment--liked" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-comments--comment--liked"></code></pre>
</div>
<form id="form-DELETEapi-comments--comment--liked" data-method="DELETE" data-path="api/comments/{comment}/liked" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-comments--comment--liked', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-comments--comment--liked" onclick="tryItOut('DELETEapi-comments--comment--liked');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-comments--comment--liked" onclick="cancelTryOut('DELETEapi-comments--comment--liked');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-comments--comment--liked" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/comments/{comment}/liked</code></b>
</p>
<p>
<label id="auth-DELETEapi-comments--comment--liked" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-comments--comment--liked" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="comment" data-endpoint="DELETEapi-comments--comment--liked" data-component="url" required  hidden>
<br>
valid id comment.
</p>
</form><h1>Kursus</h1>
<h2>Mendapatkan list data kursus yang diikuti.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data kurus yang diikuti.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-courses?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[name]=Marketing+Di+Social+Media&amp;filter[description]=Di+kursus+ini+anda+akan+belajar+bagaiman+cara+berjualan+online+di+Social+Media&amp;filter[level]=1&amp;filter[is_diklat]=true&amp;filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-courses"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[name]": "Marketing Di Social Media",
    "filter[description]": "Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media",
    "filter[level]": "1",
    "filter[is_diklat]": "true",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-courses',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[name]'=&gt; 'Marketing Di Social Media',
            'filter[description]'=&gt; 'Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media',
            'filter[level]'=&gt; '1',
            'filter[is_diklat]'=&gt; 'true',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "user_id": 1,
            "image": null,
            "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<b><code>filter[level]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[level]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan level kursus.
</p>
<p>
<b><code>filter[is_diklat]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[is_diklat]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan apakah kursus untuk diklat.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-my-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>
<h2>Mendapatkan list data kursus.</h2>
<p>Dibagian ini Anda bisa mendapatkan list data kursus. note: sebelum Anda bisa melihat pembelajaran/video kursus Anda harus mengikut kursus nya terlebih dahulu</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[name]=Marketing+Di+Social+Media&amp;filter[description]=Di+kursus+ini+anda+akan+belajar+bagaiman+cara+berjualan+online+di+Social+Media&amp;filter[level]=1&amp;filter[is_diklat]=true&amp;filter[created_at]=2020-12-24" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[name]": "Marketing Di Social Media",
    "filter[description]": "Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media",
    "filter[level]": "1",
    "filter[is_diklat]": "true",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[name]'=&gt; 'Marketing Di Social Media',
            'filter[description]'=&gt; 'Di kursus ini anda akan belajar bagaiman cara berjualan online di Social Media',
            'filter[level]'=&gt; '1',
            'filter[is_diklat]'=&gt; 'true',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "user_id": 1,
            "image": null,
            "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<b><code>filter[level]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[level]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan level kursus.
</p>
<p>
<b><code>filter[is_diklat]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[is_diklat]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan apakah kursus untuk diklat.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-courses" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>
<h2>Mendapatkan detail data kursus.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "user_id": 1,
        "user": {
            "id": 1,
            "name": "Admin Arya Anggara",
            "email": "aryaanggara.dev@gmail.com",
            "profile_photo_path": null,
            "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
            "created_at": "2021-05-01T12:58:23.000000Z"
        },
        "image": null,
        "image_url": "https:\/\/ui-avatars.com\/api\/?name=0Dummy+Couse&amp;color=7F9CF5&amp;background=EBF4FF",
        "name": "Microsoft Excel dari dasar hingga mahir",
        "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
        "status": "enabled",
        "lessons_count": 7,
        "likes_count": 321,
        "comments_count": 5,
        "created_at": "2021-05-01T12:58:24.000000Z",
        "updated_at": "2021-05-01T12:58:24.000000Z"
    }
}</code></pre>
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
<h2>Mendapatkan list data komentar kursus.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/comments?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/comments',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan list data user yang menyukai kursus.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/likes',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Enroll kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/enroll" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/enroll"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/enroll',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil enroll kursus.",
}</code></pre>
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
<h2>Menambahan komentar kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/comments"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
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
<h2>Menyukai kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai kursus.",
}</code></pre>
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
<h2>Batalkan menyukai kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/courses/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/courses/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai kursus.",
}</code></pre>
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
<h2>Mendapatkan list data pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data pembelajaran/video kursus.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/lessons?search=Berita+hari+ini&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons"
);

let params = {
    "search": "Berita hari ini",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/lessons',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Berita hari ini',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "title": "Microsoft Excel dari dasar hingga mahir",
            "description": "Kuasai Microsoft Excel 365 dan 2019 dengan cepat dan mudah.",
            "youtube_url": "https: \/\/www.youtube.com\/watch?v=x9f3RAsNZhU&amp;list=RDx9f3RAsNZhU&amp;start_radio=1&amp;ab_channel=EditraTamba",
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
}</code></pre>
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
<h2>Mendapatkan list data komentar pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/lessons/1/comments?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/comments"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/lessons/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Mendapatkan list data user yang menyukai pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/lessons/1/likes?page[number]=1&amp;page[size]=2" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/likes"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/lessons/1/likes',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "created_at": "2021-04-30T17:54:45.000000Z",
            "user": {
                "id": 1,
                "name": "Admin Arya Anggara",
                "email": "aryaanggara.dev@gmail.com",
                "profile_photo_path": null,
                "profile_photo_url": "https:\/\/ui-avatars.com\/api\/?name=Admin+Arya+Anggara&amp;color=7F9CF5&amp;background=EBF4FF",
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
}</code></pre>
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
<h2>Menambahan komentar pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/lessons/1/comments" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"comment":"Semangat terus :)"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/comments"
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/lessons/1/comments',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'comment' =&gt; 'Semangat terus :)',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menambahkan komentar.",
}</code></pre>
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
<h2>Menyukai pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/courses/1/lessons/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/courses/1/lessons/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil menyukai pembelejaran/video kursus.",
}</code></pre>
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
<h2>Batalkan menyukai pembelajaran/video kursus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/courses/1/lessons/1/liked" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/liked"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/courses/1/lessons/1/liked',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": "Berhasil membatalkan menyukai pembelejaran/video kursus.",
}</code></pre>
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
<h2>Mendapatkan list data pertanyaan per 1 tugas pembelajaran.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/1/lessons/1/task-questions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/1/lessons/1/task-questions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/1/lessons/1/task-questions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "course_lesson_id": 1,
            "question": "PG-1 lesson 1 Dummy Lesson pilih salah satu jawaban di bawah ini!",
            "options": [
                {
                    "key": 0,
                    "body": "option-1, 1 Dummy Lesson"
                },
                {
                    "key": 1,
                    "body": "option-2, 1 Dummy Lesson"
                },
                {
                    "key": 2,
                    "body": "option-3, 1 Dummy Lesson"
                },
                {
                    "key": 3,
                    "body": "option-4, 1 Dummy Lesson"
                },
                {
                    "key": 4,
                    "body": "option-5, 1 Dummy Lesson"
                }
            ],
            "the_answer": 3,
            "created_at": "2021-05-29T07:27:14.000000Z",
            "updated_at": "2021-05-29T07:27:14.000000Z"
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-courses--course--lessons--courseLesson--task-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses--course--lessons--courseLesson--task-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses--course--lessons--courseLesson--task-questions"></code></pre>
</div>
<div id="execution-error-GETapi-courses--course--lessons--courseLesson--task-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses--course--lessons--courseLesson--task-questions"></code></pre>
</div>
<form id="form-GETapi-courses--course--lessons--courseLesson--task-questions" data-method="GET" data-path="api/courses/{course}/lessons/{courseLesson}/task-questions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses--course--lessons--courseLesson--task-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses--course--lessons--courseLesson--task-questions" onclick="tryItOut('GETapi-courses--course--lessons--courseLesson--task-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses--course--lessons--courseLesson--task-questions" onclick="cancelTryOut('GETapi-courses--course--lessons--courseLesson--task-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses--course--lessons--courseLesson--task-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/{course}/lessons/{courseLesson}/task-questions</code></b>
</p>
<p>
<label id="auth-GETapi-courses--course--lessons--courseLesson--task-questions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-courses--course--lessons--courseLesson--task-questions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>course</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="course" data-endpoint="GETapi-courses--course--lessons--courseLesson--task-questions" data-component="url" required  hidden>
<br>
valid id course.
</p>
<p>
<b><code>courseLesson</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="courseLesson" data-endpoint="GETapi-courses--course--lessons--courseLesson--task-questions" data-component="url" required  hidden>
<br>
valid id courseLesson.
</p>
</form>
<h2>Mendapatkan list data pertanyaan tugas pembelajaran berdasarkan level diklat.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/courses/diklat-level-questions?level=Marketing+Di+Social+Media" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/courses/diklat-level-questions"
);

let params = {
    "level": "Marketing Di Social Media",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/courses/diklat-level-questions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'level'=&gt; 'Marketing Di Social Media',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "course_lesson_id": 1,
            "question": "PG-1 lesson 1 Dummy Lesson pilih salah satu jawaban di bawah ini!",
            "options": [
                {
                    "key": 0,
                    "body": "option-1, 1 Dummy Lesson"
                },
                {
                    "key": 1,
                    "body": "option-2, 1 Dummy Lesson"
                },
                {
                    "key": 2,
                    "body": "option-3, 1 Dummy Lesson"
                },
                {
                    "key": 3,
                    "body": "option-4, 1 Dummy Lesson"
                },
                {
                    "key": 4,
                    "body": "option-5, 1 Dummy Lesson"
                }
            ],
            "the_answer": 3,
            "created_at": "2021-05-29T07:27:14.000000Z",
            "updated_at": "2021-05-29T07:27:14.000000Z"
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-courses-diklat-level-questions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-courses-diklat-level-questions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courses-diklat-level-questions"></code></pre>
</div>
<div id="execution-error-GETapi-courses-diklat-level-questions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courses-diklat-level-questions"></code></pre>
</div>
<form id="form-GETapi-courses-diklat-level-questions" data-method="GET" data-path="api/courses/diklat-level-questions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-courses-diklat-level-questions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-courses-diklat-level-questions" onclick="tryItOut('GETapi-courses-diklat-level-questions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-courses-diklat-level-questions" onclick="cancelTryOut('GETapi-courses-diklat-level-questions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-courses-diklat-level-questions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/courses/diklat-level-questions</code></b>
</p>
<p>
<label id="auth-GETapi-courses-diklat-level-questions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-courses-diklat-level-questions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>level</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="level" data-endpoint="GETapi-courses-diklat-level-questions" data-component="query" required  hidden>
<br>
Penyortiran berdasarkan judul.
</p>
</form><h1>Laporan kasus</h1>
<h2>Mendapatkan list data laporan kasus.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data laporan kasus.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/case-reports?search=Avansa&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;include=maxime&amp;filter[status]=pending&amp;filter[request_delete]=1&amp;filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/case-reports',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Avansa',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'include'=&gt; 'maxime',
            'filter[status]'=&gt; 'pending',
            'filter[request_delete]'=&gt; '1',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Mendapatkan list data laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa mendapatkan list data laporan kasus pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-case-reports?search=Avansa&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;include=quisquam&amp;filter[status]=pending&amp;filter[request_delete]=1&amp;filter[created_at]=2020-12-24" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-case-reports',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Avansa',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'include'=&gt; 'quisquam',
            'filter[status]'=&gt; 'pending',
            'filter[request_delete]'=&gt; '1',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Mendapatkan detail data laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/my-case-reports/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-case-reports/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/my-case-reports/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Menambahkan laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa menambahkan laporan kasus pengguna saat ini.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/my-case-reports" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d ''
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/my-case-reports',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'car_id' =&gt; 1,
            'location' =&gt; '31.2467601,29.9020376',
            'chronology' =&gt; 'repellat',
            'perpetrator' =&gt; [
                'nik' =&gt; 123123123,
                'name' =&gt; 'Arya Anggara',
                'phone_number' =&gt; '0821123213',
                'address' =&gt; 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia',
                'photo' =&gt; null,
                'information' =&gt; 'aliquid',
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Batalkan laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Dibagian ini Anda bisa membuat permintaan pembatalan laporan kasus CaseReportController.</p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/my-case-reports/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/my-case-reports/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/my-case-reports/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Menambahkan Pelaku.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
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
    -F "photo=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpvMT3qD" </code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/perpetrators',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'case_report_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'nik',
                'contents' =&gt; '123123123'
            ],
            [
                'name' =&gt; 'name',
                'contents' =&gt; 'Arya Anggara'
            ],
            [
                'name' =&gt; 'phone_number',
                'contents' =&gt; '0821123213'
            ],
            [
                'name' =&gt; 'address',
                'contents' =&gt; 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia'
            ],
            [
                'name' =&gt; 'information',
                'contents' =&gt; 'ut'
            ],
            [
                'name' =&gt; 'photo',
                'contents' =&gt; fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/phpvMT3qD', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Memperbaharui salah satu data pelaku.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
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
    -F "photo=@/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/php8hdaEg" </code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/perpetrators/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'case_report_id',
                'contents' =&gt; '1'
            ],
            [
                'name' =&gt; 'nik',
                'contents' =&gt; '123123123'
            ],
            [
                'name' =&gt; 'name',
                'contents' =&gt; 'Arya Anggara'
            ],
            [
                'name' =&gt; 'phone_number',
                'contents' =&gt; '0821123213'
            ],
            [
                'name' =&gt; 'address',
                'contents' =&gt; 'Jl. Letkol Basir Surya No.71, Tasimalaya, Jawa barat, Indonesia'
            ],
            [
                'name' =&gt; 'information',
                'contents' =&gt; 'possimus'
            ],
            [
                'name' =&gt; 'photo',
                'contents' =&gt; fopen('/private/var/folders/p3/bdj9f_k948g94ww7k2bwv1c00000gn/T/php8hdaEg', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
<h2>Menghapus salah satu pelaku.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Korda</b> / <b>Korwil </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://brn-api.test/api/perpetrators/maxime" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/perpetrators/maxime"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'https://brn-api.test/api/perpetrators/maxime',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "..."
}</code></pre>
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
</form><h1>Onboarding</h1>
<h2>Mendapatkan list data onboarding.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/onboardings" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/onboardings"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/onboardings',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
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
</form><h1>Point</h1>
<h2>Mendapatkan list data misi.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/point/missions" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/point/missions"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/point/missions',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "active": true,
            "name": "Daily Check In",
            "description": "Check In setiap hari",
            "points": 10,
            "parent_id": null,
            "childrens": []
        },
        {
            "id": 4,
            "active": true,
            "name": "Grades",
            "description": null,
            "points": 100,
            "parent_id": null,
            "childrens": [
                {
                    "id": 5,
                    "active": true,
                    "name": "Excellent",
                    "description": null,
                    "points": 600,
                    "parent_id": 4,
                    "childrens": [
                        {
                            "id": 6,
                            "active": true,
                            "name": "Excellent",
                            "description": null,
                            "points": 100,
                            "parent_id": 5,
                            "childrens": []
                        }
                    ]
                }
            ]
        }
    ],
    "links": {
        "first": "https:\/\/api.brn.com\/api\/point\/missions?page=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/api.brn.com\/api\/point\/missions",
        "per_page": 10,
        "to": 10
    }
}</code></pre>
<div id="execution-results-GETapi-point-missions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-point-missions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-point-missions"></code></pre>
</div>
<div id="execution-error-GETapi-point-missions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-point-missions"></code></pre>
</div>
<form id="form-GETapi-point-missions" data-method="GET" data-path="api/point/missions" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-point-missions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-point-missions" onclick="tryItOut('GETapi-point-missions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-point-missions" onclick="cancelTryOut('GETapi-point-missions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-point-missions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/point/missions</code></b>
</p>
<p>
<label id="auth-GETapi-point-missions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-point-missions" data-component="header"></label>
</p>
</form>
<h2>Mendapatkan list data histori point.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<aside class="note">Harus memiliki akses <b>Member</b> / <b>Anggota BRN </b></aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/point/histories" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/point/histories"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/point/histories',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 2,
            "active": true,
            "name": "Completed Lesson",
            "description": null,
            "points": 100,
            "get_it_at": "2021-05-29T19:46:48.000000Z"
        },
        {
            "id": 1,
            "active": true,
            "name": "Daily Check In",
            "description": "Check In setiap hari",
            "points": 10,
            "get_it_at": "2021-04-29T19:46:48.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/api.brn.com\/api\/point\/missions?page=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/api.brn.com\/api\/point\/missions",
        "per_page": 10,
        "to": 10
    }
}</code></pre>
<div id="execution-results-GETapi-point-histories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-point-histories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-point-histories"></code></pre>
</div>
<div id="execution-error-GETapi-point-histories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-point-histories"></code></pre>
</div>
<form id="form-GETapi-point-histories" data-method="GET" data-path="api/point/histories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-point-histories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-point-histories" onclick="tryItOut('GETapi-point-histories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-point-histories" onclick="cancelTryOut('GETapi-point-histories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-point-histories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/point/histories</code></b>
</p>
<p>
<label id="auth-GETapi-point-histories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-point-histories" data-component="header"></label>
</p>
</form><h1>Profile</h1>
<h2>Menghitung jumlah mobil dan laporan kasus pengguna saat ini.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/profile/count-cars-and-case-reports" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/profile/count-cars-and-case-reports"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/profile/count-cars-and-case-reports',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "data": {
    "count_cars" : "1",
    "count_case_reports" : "2"
 },
}</code></pre>
<div id="execution-results-GETapi-profile-count-cars-and-case-reports" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-profile-count-cars-and-case-reports"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-profile-count-cars-and-case-reports"></code></pre>
</div>
<div id="execution-error-GETapi-profile-count-cars-and-case-reports" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-profile-count-cars-and-case-reports"></code></pre>
</div>
<form id="form-GETapi-profile-count-cars-and-case-reports" data-method="GET" data-path="api/profile/count-cars-and-case-reports" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-profile-count-cars-and-case-reports', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-profile-count-cars-and-case-reports" onclick="tryItOut('GETapi-profile-count-cars-and-case-reports');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-profile-count-cars-and-case-reports" onclick="cancelTryOut('GETapi-profile-count-cars-and-case-reports');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-profile-count-cars-and-case-reports" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/profile/count-cars-and-case-reports</code></b>
</p>
<p>
<label id="auth-GETapi-profile-count-cars-and-case-reports" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-profile-count-cars-and-case-reports" data-component="header"></label>
</p>
</form>
<h2>Memperbaharui status level diklat.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/profile/update-status" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"level":"qui"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/profile/update-status"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "level": "qui"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/profile/update-status',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'level' =&gt; 'qui',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": 'Berhasil memperbaharui status level diklat',
}</code></pre>
<div id="execution-results-POSTapi-profile-update-status" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-profile-update-status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-profile-update-status"></code></pre>
</div>
<div id="execution-error-POSTapi-profile-update-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-profile-update-status"></code></pre>
</div>
<form id="form-POSTapi-profile-update-status" data-method="POST" data-path="api/profile/update-status" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-profile-update-status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-profile-update-status" onclick="tryItOut('POSTapi-profile-update-status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-profile-update-status" onclick="cancelTryOut('POSTapi-profile-update-status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-profile-update-status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/profile/update-status</code></b>
</p>
<p>
<label id="auth-POSTapi-profile-update-status" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-profile-update-status" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>level</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="level" data-endpoint="POSTapi-profile-update-status" data-component="body" required  hidden>
<br>
level.
</p>

</form>
<h2>Upgrade menjadi member Brn.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/upgrade-member/eaque" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/upgrade-member/eaque"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/upgrade-member/eaque',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": 'Berhasil',
}</code></pre>
<div id="execution-results-POSTapi-upgrade-member--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-upgrade-member--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-upgrade-member--user-"></code></pre>
</div>
<div id="execution-error-POSTapi-upgrade-member--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-upgrade-member--user-"></code></pre>
</div>
<form id="form-POSTapi-upgrade-member--user-" data-method="POST" data-path="api/upgrade-member/{user}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-upgrade-member--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-upgrade-member--user-" onclick="tryItOut('POSTapi-upgrade-member--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-upgrade-member--user-" onclick="cancelTryOut('POSTapi-upgrade-member--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-upgrade-member--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/upgrade-member/{user}</code></b>
</p>
<p>
<label id="auth-POSTapi-upgrade-member--user-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-upgrade-member--user-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="POSTapi-upgrade-member--user-" data-component="url" required  hidden>
<br>

</p>
</form>
<h2>Memperbaharui status survey pegguna.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/user-survey/deserunt" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"is_survey":false}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/user-survey/deserunt"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "is_survey": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/user-survey/deserunt',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_AUTH_KEY}',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'is_survey' =&gt; false,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
 "message": 'Berhasil memperbaharui status level diklat',
}</code></pre>
<div id="execution-results-POSTapi-user-survey--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-survey--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-survey--user-"></code></pre>
</div>
<div id="execution-error-POSTapi-user-survey--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-survey--user-"></code></pre>
</div>
<form id="form-POSTapi-user-survey--user-" data-method="POST" data-path="api/user-survey/{user}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-survey--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-survey--user-" onclick="tryItOut('POSTapi-user-survey--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-survey--user-" onclick="cancelTryOut('POSTapi-user-survey--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-survey--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user-survey/{user}</code></b>
</p>
<p>
<label id="auth-POSTapi-user-survey--user-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-user-survey--user-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="POSTapi-user-survey--user-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>is_survey</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-user-survey--user-" hidden><input type="radio" name="is_survey" value="true" data-endpoint="POSTapi-user-survey--user-" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-user-survey--user-" hidden><input type="radio" name="is_survey" value="false" data-endpoint="POSTapi-user-survey--user-" data-component="body" required ><code>false</code></label>
<br>
telah di survey apa belum.
</p>

</form><h1>Server</h1>
<h2>Ping the server.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/ping" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/ping"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/ping',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": "ok",
    "timestamp": "2021-08-07T06:57:16.119002Z",
    "host": "127.0.0.1"
}</code></pre>
<div id="execution-results-GETapi-ping" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-ping"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ping"></code></pre>
</div>
<div id="execution-error-GETapi-ping" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ping"></code></pre>
</div>
<form id="form-GETapi-ping" data-method="GET" data-path="api/ping" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-ping', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-ping" onclick="tryItOut('GETapi-ping');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-ping" onclick="cancelTryOut('GETapi-ping');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-ping" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/ping</code></b>
</p>
</form><h1>Tentang BRN</h1>
<h2>Mendapatkan data tentang BRN.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/about" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/about"
);

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/about',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "title": "title",
    "vesion_app": "1.0.0",
    "copyright": "copyright",
    "histories": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "organizational_regulations": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "tujuh_sapta_cipta": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "adarts": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "organizational_structures": [
        {
            "key": 0,
            "image": "http:\/\/api.brn.com\/storage\/..."
        },
        {
            "key": 1,
            "image": "http:\/\/api.brn.com\/storage\/..."
        }
    ],
    "playstore_url_app": "https:\/\/playsotre......",
    "created_at": "2021-05-03T12:13:34.000000Z",
    "updated_at": "2021-05-03T12:13:34.000000Z"
}</code></pre>
<div id="execution-results-GETapi-about" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-about"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-about"></code></pre>
</div>
<div id="execution-error-GETapi-about" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-about"></code></pre>
</div>
<form id="form-GETapi-about" data-method="GET" data-path="api/about" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-about', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-about" onclick="tryItOut('GETapi-about');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-about" onclick="cancelTryOut('GETapi-about');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-about" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/about</code></b>
</p>
</form><h1>Upload File</h1>
<h2>Upload File</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://brn-api.test/api/upload-files" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"key":"secret","files":[[],[]]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/upload-files"
);

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "key": "secret",
    "files": [
        [],
        []
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://brn-api.test/api/upload-files',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'key' =&gt; 'secret',
            'files' =&gt; [
                [],
                [],
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "files.0": [
            "Files.0 wajib diisi."
        ],
        "files.1": [
            "Files.1 wajib diisi."
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-upload-files" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-upload-files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-upload-files"></code></pre>
</div>
<div id="execution-error-POSTapi-upload-files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-upload-files"></code></pre>
</div>
<form id="form-POSTapi-upload-files" data-method="POST" data-path="api/upload-files" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-upload-files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-upload-files" onclick="tryItOut('POSTapi-upload-files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-upload-files" onclick="cancelTryOut('POSTapi-upload-files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-upload-files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/upload-files</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="key" data-endpoint="POSTapi-upload-files" data-component="body" required  hidden>
<br>
upload file key.
</p>
<p>
<b><code>files</code></b>&nbsp;&nbsp;<small>object[]</small>  &nbsp;
<input type="text" name="files.0" data-endpoint="POSTapi-upload-files" data-component="body" required  hidden>
<input type="text" name="files.1" data-endpoint="POSTapi-upload-files" data-component="body" hidden>
<br>
List file.
</p>

</form><h1>Wilayah</h1>
<h2>Mendapatkan list data wilayah yang tersedia.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/regions?search=Jawa+Barat&amp;page[number]=1&amp;page[size]=2&amp;sort=created_at&amp;filter[region]=Jawa+Barat&amp;filter[created_at]=2020-12-24" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/regions"
);

let params = {
    "search": "Jawa Barat",
    "page[number]": "1",
    "page[size]": "2",
    "sort": "created_at",
    "filter[region]": "Jawa Barat",
    "filter[created_at]": "2020-12-24",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/regions',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Jawa Barat',
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
            'sort'=&gt; 'created_at',
            'filter[region]'=&gt; 'Jawa Barat',
            'filter[created_at]'=&gt; '2020-12-24',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "region": "Jawa Barat",
            "created_at": "2021-07-01T14:26:40.000000Z",
            "updated_at": "2021-07-01T14:26:40.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/regions?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/regions",
        "per_page": 15,
        "to": 1
    }
}</code></pre>
<div id="execution-results-GETapi-regions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-regions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-regions"></code></pre>
</div>
<div id="execution-error-GETapi-regions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-regions"></code></pre>
</div>
<form id="form-GETapi-regions" data-method="GET" data-path="api/regions" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-regions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-regions" onclick="tryItOut('GETapi-regions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-regions" onclick="cancelTryOut('GETapi-regions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-regions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/regions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Mencari data wilayah.
</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Menyortir data ( key_name / -key_name ), default -created_at.
</p>
<p>
<b><code>filter[region]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[region]" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan nana wilayah.
</p>
<p>
<b><code>filter[created_at]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[created_at]" data-endpoint="GETapi-regions" data-component="query"  hidden>
<br>
Penyortiran berdasarkan tanggal dibuat.
</p>
</form>
<h2>Mendapatkan list data area berdasarkan region yang dipilih.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://brn-api.test/api/regions/1/areas?page[number]=1&amp;page[size]=2" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://brn-api.test/api/regions/1/areas"
);

let params = {
    "page[number]": "1",
    "page[size]": "2",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://brn-api.test/api/regions/1/areas',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'page[number]'=&gt; '1',
            'page[size]'=&gt; '2',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "region_id": 1,
            "area": "Tasikmalaya",
            "created_at": "2021-07-01T14:41:16.000000Z",
            "updated_at": "2021-07-01T14:41:16.000000Z"
        },
        {
            "id": 2,
            "region_id": 1,
            "area": "Bandung",
            "created_at": "2021-07-01T14:41:16.000000Z",
            "updated_at": "2021-07-01T14:41:16.000000Z"
        }
    ],
    "links": {
        "first": "https:\/\/brn-api.test\/api\/regions\/1\/areas?page%5Bnumber%5D=1",
        "last": null,
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "path": "https:\/\/brn-api.test\/api\/regions\/1\/areas",
        "per_page": 15,
        "to": 2
    }
}</code></pre>
<div id="execution-results-GETapi-regions--region--areas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-regions--region--areas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-regions--region--areas"></code></pre>
</div>
<div id="execution-error-GETapi-regions--region--areas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-regions--region--areas"></code></pre>
</div>
<form id="form-GETapi-regions--region--areas" data-method="GET" data-path="api/regions/{region}/areas" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-regions--region--areas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-regions--region--areas" onclick="tryItOut('GETapi-regions--region--areas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-regions--region--areas" onclick="cancelTryOut('GETapi-regions--region--areas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-regions--region--areas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/regions/{region}/areas</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>region</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="region" data-endpoint="GETapi-regions--region--areas" data-component="url" required  hidden>
<br>
valid id region.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[number]" data-endpoint="GETapi-regions--region--areas" data-component="query"  hidden>
<br>
Menyesuaikan URI paginator.
</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="page[size]" data-endpoint="GETapi-regions--region--areas" data-component="query"  hidden>
<br>
Menyesuaikan jumlah data yang ditampilkan.
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript","php"];
        setupLanguages(languages);
    });
</script>
</body>
</html>