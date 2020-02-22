Title: Convert Character Sheet
Date: 2017-06-11 10:20
slug: convertsheet
status: hidden
lang: en

This tool offers you a simple way to convert Character-Sheet from Rolisteam v1.8 to the new 1.9 standard.
Two options here.

* The default is the minimal conversion. Which means visual items will not change.
* 1.9 SDK : all items are change to use 1.9 sdk, meaning their looks change too (mainly select and checkbox).

## Form

<form method="post" action="/php/convertSheet.php" enctype="multipart/form-data">
  <input type="file" id="source" name="source"/><br/>
  <span for="complete">Use SDK from 1.9:</span><input type="checkbox" id="complete" name="complete" value="checked"/><br/>
  <input type="submit" name="convert" value="convert" id="convert" /><br/>
</form>
