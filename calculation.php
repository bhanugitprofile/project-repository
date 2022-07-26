<!Doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
Insert Amount in Dispute (in HKD) $: <input type="number" id="cBalance" value="">
        <button type="submit" id="cal" name="submit">Calculate</button>
        <div id="result">
        </div>
    <script>
        $(document).on("click", "#cal", function() {
            var main = $('#cBalance').val();
            var per = 0;
            var amount = 0; 
            switch(true) {
                case (main <= 1000000):
                    per = 5;
                    break;
                case (main <= 5000000):
                    per = 2.25;
                    amount = 50000;
                    break;
                case (main <= 10000000):
                    per = 1.75;
                    amount = 1420000;
                    break;
                    case (main <= 50000000):
                    per = 0.80;
                    amount = 2,27,500;
                    break;
                    case (main <= 100000000):
                    per = 0.45;
                    amount = 5,47,500;
                    break;
                default:
                    // code block
                }
            var dec = (per / 100)*main; //its convert 10 into 0.10
            console.log(dec);
            dec = dec + amount;
            console.log(dec);
           // var mult = main * dec; // gives the value for subtract from main value
            var discount = main - dec;

    var html = "<span>Registration Fee: <b>"+dec+"</b></span><br>"+ 
                "<span>HKIAC's Administrative Fee: <b>"+discount+"</b></span><br>"+
                "<span>One Arbitrator's Fees (excluding expense):</span><br>"+
                "<span>HKIAC's Administrative Fee: <b>"+main+"</b></span><br>";
                $('#result').html(html);
            });
    </script>
</body>
</html>