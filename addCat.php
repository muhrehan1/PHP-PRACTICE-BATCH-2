<?php include "fetchtitle.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="addCat.css">
    <link rel="stylesheet" href="btn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $addCat;?></title>
</head>
<body>
<div class="container formcontainer">
    <div class="row">
        <a href="index.php">
            <button class="cta">
                <span>Go Back</span>
                <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </button>
        </a>
        <h1 class="addcath1">Create Category</h1>
        <form action="">
            <div class="catname">
                <input type="text" name="catname" placeholder="Enter Category" required="required">
            </div>
            <div class="catdesc">
                <label for="">Category Description</label>
                <textarea  id="editor1"  name="cat_desc" id="" cols="90" rows="10" placeholder="Please enter Cat Description" required="required"></textarea>
            </div>
            <div class="catpic">
                <label for="">Category Image</label>
                <input type="file" placeholder="Choose Category Image" required="required">
            </div>
            <button type="submit" class="learn-more">
              <span aria-hidden="true" class="circle">
              <span class="icon arrow"></span>
              </span>
                <span class="button-text">Create Category</span>
            </button>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
<script>
    var editor1 = CKEDITOR.replace('editor1', {
        extraAllowedContent: 'div',
        height: 460,
        removeButtons: 'PasteFromWord'
    });
    editor1.on('instanceReady', function() {
        // Output self-closing tags the HTML4 way, like <br>.
        this.dataProcessor.writer.selfClosingEnd = '>';

        // Use line breaks for block elements, tables, and lists.
        var dtd = CKEDITOR.dtd;
        for (var e in CKEDITOR.tools.extend({}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent)) {
            this.dataProcessor.writer.setRules(e, {
                indent: true,
                breakBeforeOpen: true,
                breakAfterOpen: true,
                breakBeforeClose: true,
                breakAfterClose: true
            });
        }

        // this.setMode('source');
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>