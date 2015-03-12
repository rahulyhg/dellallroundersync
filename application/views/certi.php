<!DOCTYPE html>
<html lang="">
<head>
    <title ng-bind="'Dell - '+template.title">Dell</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("certi")."/";?>css/main.css" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="<?php echo base_url("certi")."/";?>js/base64.js"></script>
    <script src="<?php echo base_url("certi")."/";?>js/canvas2image.js"></script>
    <script src="<?php echo base_url("certi")."/";?>js/html2canvas.js"></script>
</head>
<body>
    <div class="centerlaptop">
        <div id="savearea" class="text-center" ng-class="canvascolor" >
           <div class="whitebg"></div> 
            <div class="laptop <?php switch($before->certificate)
{
    case "0": 
    echo "lappy";
    break;
    
    case "1": 
    echo "tent";
    break;
    
    case "2": 
    echo "display";
    break;
    
}
                        
                        
                        
                        ?>" ng-class="laptopclass"> <!-- add class  display/lappy/tent -->
                <div class="">
                    <div class="certitext">
                        <p class="nameclass" style="font-size:24px"><?php echo $before->name; $time=intval($before->testtime);?></p>
                        <p>completed the</br> Dell All Rounder Challenge </br>in <?php echo intval($time/60); ?> mins and <?php echo $time%60;?> seconds</p>
                    </div>
                    <img class="messageimage" src="<?php echo $before->message;?>">
                </div>
            </div>
        </div>
    </div>
    
    <script>
 html2canvas($("#savearea"), {
                onrendered: function (canvas) {
                    theCanvas = canvas;
                    document.body.appendChild(canvas);
                    //console.log(canvas);
                    canvas.setAttribute('crossOrigin', 'anonymous');
                    var dataUrl = canvas.toDataURL('image/jpeg', 0.7);
                    console.log(dataUrl);
                    $(".centerlaptop").hide();
                    // Convert and download as image
                    //console.log(Canvas2Image.convertToPNG(canvas, 500, 500));
                    //Canvas2Image.saveAsPNG(canvas);
                    //$("#img-out").append(canvas);
                    // Clean up 
                    //document.body.removeChild(canvas);

                    
                },
                background: "#f00"
            });
</script>

</body>
</html>
