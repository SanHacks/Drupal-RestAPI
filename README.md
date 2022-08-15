# Drupal-RestAPI
This is an example of REST API implementation on DRUPAL.
<h2>Assuming That You Already Have Lando & Docker Installed</h2>
<p>This is a simple implementation of JSON:API module, Technically No Files Are Needed to Be Uploaded, Files In This Repo Will Help You CRUD the PHONES , Installation Instruction Of The Module Is Below</p>
Link To Test A Simple Anonymous Call To AN Experimental Accenture API : <a href="http://fillthegaps.xyz/accenture/jsonapi/node/cellphones?sort[sort-created][path]=created&sort[sort-created][direction]=DESC"><h3 style="color:red">CLICK HERE</H3></A>
<h4> Process Flow Of The A JSON:API </h4>
<img src="https://user-images.githubusercontent.com/13138647/184642707-07f2b3c3-f9f0-479b-ade5-e282651c5404.jpg">

<h3>Setting Up the Module</h3>
First, setup a new The JSON:API Module.
<h4>In The Administration Panel; Go to Extend>Web services</h4>
<img src="https://user-images.githubusercontent.com/13138647/184642268-75415e6d-5421-401d-96c5-f607479d42ac.PNG">
<h4> Enable JSON:API</h4>
<br>
<img src="https://user-images.githubusercontent.com/13138647/184642348-a49923e0-1e55-435a-b36a-1cd2a98c63da.PNG">
<br>

<h4> Edit JSON:API Permissions to allow , CRUD. </h4>
<img src="https://user-images.githubusercontent.com/13138647/184642428-edaf5cf5-21bd-4b5f-9380-86db6527e390.PNG">

<br>
<h4> Edit JSON:API Permissions to allow , CRUD. </h4>
<img src="https://user-images.githubusercontent.com/13138647/184642476-d7b41438-2d0d-48f1-b7b3-b2804a4024ce.PNG">
<br>
<h4>Create Content Type </h4>
<img src="https://user-images.githubusercontent.com/13138647/184642542-bd4cdf0e-0ec3-4ff7-a9a8-d875b4b278a2.PNG">
<br>
<h4>Created Content Type(for this case CellPHone) </h4>
<img src="https://user-images.githubusercontent.com/13138647/184642566-8f0ed3ae-da68-4b4a-8e21-50ad56aea8fd.PNG">
<br>
<h4>API REQUEST TEST(READ)</h4>
<img src="https://user-images.githubusercontent.com/13138647/184642656-3d9c190d-911c-4e95-8d2a-97fe2d93980e.PNG">
<br>
<h2>Filtering</h2>

Filtering the Drupal JSON:API collection endpoint

The first thing to do is to filter on the status

The fix was to filter on status
To filter on status add  status = 1 so the endpoint now looks like below.
http://fillthegaps.xyz/accenture/jsonapi/node/cellphones?filter[status][value]=1

Or long formhttp://fillthegaps.xyz/accenture/jsonapi/node/cellphones?
filter[status-filter][condition][path]=status&
filter[status-filter][condition][value]=1

At its most simple that is all we need, we can request a collection of resources at a content type endpoint and then filter it on status. Read on for a few more things you may want to do if you don't want to request all content from your chosen content types.

Filter on Taxonomy or category
Taxonomy is Drupal's classification system which gives you powerful tools to add your content to categories or terms in a taxonomy vocabulary. A deep discussion on taxonomy is not really needed here and beyond the scope of this cellphones so let's move on.

Filter on Tags
Drupal out-of-box has tags ready to use on your content so let use that taxonomy vocabulary.

This may be better done on the front-end but if you want only to access content tagged "CSS", for example, you can do that. Tags are the default taxonomy vocabulary so if you create your own you need to change out the tags to your new taxonomy vocabulary.

To filter the node cellphoness tagged CSS use the below filters in your request.

Filter on UID
filter[uid.name][value]=Simon //That's me

You can pretty much filter on what you want. Have a play around and check the official documents.

Sorting
Before I added the sort the results were being returned in ascending order and to change the order on the front-end I used display: flex and flex-order: reverse. Even though not a bad solution, requesting the data in the order you want is by far the best solution.

To sort on created date descending you can use

/jsonapi/node/cellphones?
sort[sort-created][path]=created&
sort[sort-created][direction]=DESC

Other sorts you may wish to do are on title, modified date, or user.

Includes & Pagination
Other possible useful ways to request data are pagination & includes.

Pagination
If you know that the data set is large you may only want to request a set number of say 5 results for a homepage component or module, to do this you will want to limit your results. Alternatively, you may also want to request the second set of results without the first 5, to achieve this you can use offset. Following is the syntax you need for both these.

/jsonapi/node/cellphones?page[limit]=5
/jsonapi/node/cellphones?page[limit]=10&page[offset]=5

http://www.accenture.com/accenture/jsonapi/node/cellphones?filter%5Bstatus%5D%5Bvalue%5D=1
http://fillthegaps.xyz/accenture/jsonapi/node/cellphones?
filter[taxonomy_term--tags][condition][path]=field_tags.name&
filter[taxonomy_term--tags][condition][operator]=IN&
filter[taxonomy_term--tags][condition][value][]=CSS




Response/Update body

{<br>
    "data": {<br>
        "type": "node--cellphones",<br>
        "id": "0a447172-6a3a-4a74-8ae6-aec0955b8f40",<br>
        "links": {<br>
            "self": "http://fillthegaps.xyz/accenture/jsonapi/node/cellphones0a447172-6a3a-4a74-8ae6-aec0955b8f40"<br>
        },<br>
        "attributes": {<br>
            "drupal_internal__nid": 1,<br>
            "drupal_internal__vid": 1,<br>
            "langcode": "en",<br>
            "status": true,<br>
            "drupal_internal__title": "Phone name",<br>
            "uid": "0a447172-6a3a-4a74-8ae6-aec0955b8f40",<br>
            "created": "2018-12-07T15:22:37+00:00",<br>
            "changed": "2018-12-07T15:22:37+00:00",<br>
            "promote": false,<br>
            "sticky": false,<br>
            "default_langcode": true,<br>
            "revision_translation_affected": true,<br>
            "moderation_state": "published",<br>
            "path": {<br>
                "alias": "/node/1",<br>
                "pid": null,<br>
                "langcode": "en"<br>
            },<br>
            "content_translation_source": null,<br>
            "content_translation_outdated": false,<br>
            "title": "Phone name",<br>
            "body": {<br>
                "value": "Phone updated description",<br>
                "format": "basic_html",<br>
                "processed": "Phone updated description"<br>
            },<br>
            "field_image": {<br>
                " alt": "",<br>
                " title": "",<br>
                " width": null,<br>
                " height": null,<br>
                " target_id": null,<br>
                " target_revision_id": null<br>
            },<br>
            "field_tags": [],<br>
            "field_sku": "Phone updated sku",<br>
            "field_price": "Phone updated price",<br>
            "uid": {<br>
                "target_id": "0a447172-6a3a-4a74-8ae6-aec0955b8f40",<br>
                "target_type": "user",<br>
                "target_uuid": "0a447172-6a3a-4a74-8ae6-aec0955b8f40",<br>
                "url": "http://fillthegaps.xyz/accenture/jsonapi/user/1"<br>
            },<br>
            "links": {<br>
                "self": {<br>
                    "href": "http://fillthegaps.xyz/accenture/jsonapi/node/cellphones0a447172-6a3a-4a74-8ae6-aec0955b8f40?resourceVersion=id%3A1"<br>
                },<br>
                "type": {<br>
                    "href": "http://fillthegaps.xyz/accenture/jsonapi/node/cellphones?resourceVersion=id%3A1"<br>
                },<br>
                "uid": {<br>
                    "href": "http://fillthegaps.xyz/jsonapi/user/sifhufhi/0a447172-6a3a-4a74-8ae6-aec0955b8f40?resourceVersion=id%3A1"<br>
                }<br>
            }<br>
        }<br>
    }<br>
}<br>
The "id" is required. Add the attributes that should be updated.<br>
