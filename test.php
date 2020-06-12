<html>
<head>
    <title>Test scroll</title>

    <style>

        #verticalScroller {
            position: absolute;
            width:52px;
            height: 180px;
            border: 1px solid red;
            overflow: hidden;
        }

        #verticalScroller > div{
            position:absolute;
            width:50px;
            height:50px;
            border: 1px solid blue;
            overflow:hidden;
        }

        #page_wrapper {
            width: 600px;
            margin: 0 auto;
            padding-top: 100px;
        }

    </style>

<body>


<div id="page_wrapper">

    <div id="verticalScroller">
        <div>1 Lorem ipsum dolor sit</div>
        <div>2 Lorem ipsum dolor sit</div>
        <div>3 Lorem ipsum dolor sit</div>
        <div>4 Lorem ipsum dolor sit</div>
    </div>

</div>





<script src="js/jquery-3.5.1.min.js"></script>


<script>



    window.verticalScroller = function($elem) {

        var top = parseInt($elem.css("top"));



        // getting height of single elemment and minus to get negative to pull

        var temp = -1 * $('#verticalScroller > div').height();



        if(top < temp) {
            /*
            AS ELEMENT MOVE UP FROM THE CANVAS AND BECOME INVISIBLE THEN
            PUSH THAT ELEMENT TO THE VERY LAST POSITION OF THE CANVAS
            * */
            top = $('#verticalScroller').height();
            $elem.css("top", top);
        }


        $elem.animate({ top: (parseInt(top)-60) }, 1200, function () {

            window.verticalScroller($(this));

        });
    };


    $(document).ready(function() {

        var i = 0;

        $("#verticalScroller > div").each(function () {

            $(this).css("top", i);

            i += 60;

            window.verticalScroller($(this));

        });
    });



</script>



</body>
</html>