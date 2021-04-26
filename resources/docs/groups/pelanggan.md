# Pelanggan


## Masuk sebagai pelanggan




> Example request:

```bash
curl -X POST \
    "http://get-contact.test/api/customer" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"name":"arya anggara","address":"jl. letkol basir surya, tasikmalaya, jawa barat","phoneNumber":"6282127586566"}'

```

```javascript
const url = new URL(
    "http://get-contact.test/api/customer"
);

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "name": "arya anggara",
    "address": "jl. letkol basir surya, tasikmalaya, jawa barat",
    "phoneNumber": "6282127586566"
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
    'http://get-contact.test/api/customer',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'arya anggara',
            'address' => 'jl. letkol basir surya, tasikmalaya, jawa barat',
            'phoneNumber' => '6282127586566',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (400):

```json
{
    "message": "Nomor telepon sudah digunakan sebelumnya"
}
```
<div id="execution-results-POSTapi-customer" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-customer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-customer"></code></pre>
</div>
<div id="execution-error-POSTapi-customer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-customer"></code></pre>
</div>
<form id="form-POSTapi-customer" data-method="POST" data-path="api/customer" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-customer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-customer" onclick="tryItOut('POSTapi-customer');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-customer" onclick="cancelTryOut('POSTapi-customer');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-customer" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/customer</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-customer" data-component="body"  hidden>
<br>
nama.</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-customer" data-component="body"  hidden>
<br>
alamat lengkap.</p>
<p>
<b><code>phoneNumber</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phoneNumber" data-endpoint="POSTapi-customer" data-component="body" required  hidden>
<br>
nomor telepon.</p>

</form>


## Membuat data list kontak dari pelanggan




> Example request:

```bash
curl -X POST \
    "http://get-contact.test/api/customer-contacts" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"contacts":[{"customerId":1,"displayName":"Arya DN","givenName":"Arya GN","middleName":"Arya MN","prefix":"prefix","suffix":"suffix","familyName":"Arya FN","company":"Neosantara","jobTitle":"Developer","emails":[{"label":"label","value":"arya@gmail.com"},[]],"phones":[{"label":"label","value":"082323232323"},[]],"postalAddresses":"Jl.letkol basir surya no 1124, tasikmalaya, jawa baarat, indonesia","birthday":"2020-12-20","androidAccountType":"voluptas","androidAccountName":"Arya AC"},{"customerId":1,"displayName":"Arya DN","givenName":"Arya GN","company":"Neosantara","jobTitle":"Developer","emails":[[],[]],"phones":[[],[]]}]}'

```

```javascript
const url = new URL(
    "http://get-contact.test/api/customer-contacts"
);

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "contacts": [
        {
            "customerId": 1,
            "displayName": "Arya DN",
            "givenName": "Arya GN",
            "middleName": "Arya MN",
            "prefix": "prefix",
            "suffix": "suffix",
            "familyName": "Arya FN",
            "company": "Neosantara",
            "jobTitle": "Developer",
            "emails": [
                {
                    "label": "label",
                    "value": "arya@gmail.com"
                },
                []
            ],
            "phones": [
                {
                    "label": "label",
                    "value": "082323232323"
                },
                []
            ],
            "postalAddresses": "Jl.letkol basir surya no 1124, tasikmalaya, jawa baarat, indonesia",
            "birthday": "2020-12-20",
            "androidAccountType": "voluptas",
            "androidAccountName": "Arya AC"
        },
        {
            "customerId": 1,
            "displayName": "Arya DN",
            "givenName": "Arya GN",
            "company": "Neosantara",
            "jobTitle": "Developer",
            "emails": [
                [],
                []
            ],
            "phones": [
                [],
                []
            ]
        }
    ]
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
    'http://get-contact.test/api/customer-contacts',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'contacts' => [
                [
                    'customerId' => 1,
                    'displayName' => 'Arya DN',
                    'givenName' => 'Arya GN',
                    'middleName' => 'Arya MN',
                    'prefix' => 'prefix',
                    'suffix' => 'suffix',
                    'familyName' => 'Arya FN',
                    'company' => 'Neosantara',
                    'jobTitle' => 'Developer',
                    'emails' => [
                        [
                            'label' => 'label',
                            'value' => 'arya@gmail.com',
                        ],
                        [],
                    ],
                    'phones' => [
                        [
                            'label' => 'label',
                            'value' => '082323232323',
                        ],
                        [],
                    ],
                    'postalAddresses' => 'Jl.letkol basir surya no 1124, tasikmalaya, jawa baarat, indonesia',
                    'birthday' => '2020-12-20',
                    'androidAccountType' => 'voluptas',
                    'androidAccountName' => 'Arya AC',
                ],
                [
                    'customerId' => 1,
                    'displayName' => 'Arya DN',
                    'givenName' => 'Arya GN',
                    'company' => 'Neosantara',
                    'jobTitle' => 'Developer',
                    'emails' => [
                        [],
                        [],
                    ],
                    'phones' => [
                        [],
                        [],
                    ],
                ],
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
    "contacts": [
        {
            "customerId": 1,
            "displayName": "Arya DN",
            "givenName": "Arya GN",
            "middleName": "Arya MN",
            "prefix": "prefix",
            "suffix": "suffix",
            "familyName": "Arya FN",
            "company": "Neosantara",
            "jobTitle": "Developer",
            "emails": [
                {
                    "label": "label",
                    "value": "arya@gmail.com"
                },
                []
            ],
            "phones": [
                {
                    "label": "label",
                    "value": "082323232323"
                },
                []
            ],
            "postalAddresses": "Jl.letkol basir surya no 1124, tasikmalaya, jawa baarat, indonesia",
            "birthday": "2020-12-20",
            "androidAccountType": "voluptas",
            "androidAccountName": "Arya AC"
        },
        {
            "customerId": 1,
            "displayName": "Arya DN",
            "givenName": "Arya GN",
            "company": "Neosantara",
            "jobTitle": "Developer",
            "emails": [
                [],
                []
            ],
            "phones": [
                [],
                []
            ]
        }
    ]
}
```
<div id="execution-results-POSTapi-customer-contacts" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-customer-contacts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-customer-contacts"></code></pre>
</div>
<div id="execution-error-POSTapi-customer-contacts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-customer-contacts"></code></pre>
</div>
<form id="form-POSTapi-customer-contacts" data-method="POST" data-path="api/customer-contacts" data-authed="0" data-hasfiles="0" data-headers='{"Accept":"application\/json","Content-Type":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-customer-contacts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-customer-contacts" onclick="tryItOut('POSTapi-customer-contacts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-customer-contacts" onclick="cancelTryOut('POSTapi-customer-contacts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-customer-contacts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/customer-contacts</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>contacts</code></b>&nbsp;&nbsp;<small>object[]</small>  &nbsp;
<br>
List dari kontak.</summary>
<br>
<p>
<b><code>contacts[].customerId</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="contacts.0.customerId" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
valid id pelanggan.</p>
<p>
<b><code>contacts[].displayName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.displayName" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
nama.</p>
<p>
<b><code>contacts[].givenName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.givenName" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
nama.</p>
<p>
<b><code>contacts[].middleName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.middleName" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
nama.</p>
<p>
<b><code>contacts[].prefix</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.prefix" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
prefix.</p>
<p>
<b><code>contacts[].suffix</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.suffix" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
suffix.</p>
<p>
<b><code>contacts[].familyName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.familyName" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
nama.</p>
<p>
<b><code>contacts[].company</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.company" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
perusahaan.</p>
<p>
<b><code>contacts[].jobTitle</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.jobTitle" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
nama pekerjaan.</p>
<p>
<details>
<summary>
<b><code>contacts[].emails</code></b>&nbsp;&nbsp;<small>object[]</small>  &nbsp;
<br>
List dari email.</summary>
<br>
<p>
<b><code>contacts[].emails[].label</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.emails.0.label" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
label email.</p>
<p>
<b><code>contacts[].emails[].value</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.emails.0.value" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
value email.</p>
</details>
</p>

<p>
<details>
<summary>
<b><code>contacts[].phones</code></b>&nbsp;&nbsp;<small>object[]</small>  &nbsp;
<br>
List dari nomor telepon.</summary>
<br>
<p>
<b><code>contacts[].phones[].label</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.phones.0.label" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
label phone.</p>
<p>
<b><code>contacts[].phones[].value</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.phones.0.value" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
value phone.</p>
</details>
</p>

<p>
<b><code>contacts[].postalAddresses</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.postalAddresses" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
alamat.</p>
<p>
<b><code>contacts[].birthday</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.birthday" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
.</p>
<p>
<b><code>contacts[].androidAccountType</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.androidAccountType" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
android account type.</p>
<p>
<b><code>contacts[].androidAccountName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="contacts.0.androidAccountName" data-endpoint="POSTapi-customer-contacts" data-component="body"  hidden>
<br>
nama.</p>
</details>
</p>

</form>



