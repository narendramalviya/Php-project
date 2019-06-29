<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Page</title>
<style>
#image {
  position: relative;
  width: 606px;
  height: 606px;
  background-position: 0px -303px; /* test bg position*/
  /*bg position would go on your .wraph.active styles as seen in other demo*/
}
</style>

</head>
<body>

<div id="image"></div>

<script>

var images = [
  "https://i.imgur.com/oAfqb2E.png",
  "https://i.imgur.com/gaijZc5.png",
  "https://i.imgur.com/3v4t6X1.png"
];

function randImg() {
  var size = images.length
  var x = Math.floor(size * Math.random())
  document.getElementById('image').style.backgroundImage = 'url(' + images[x] + ')';
}

randImg();
</script>

</body>
</html>