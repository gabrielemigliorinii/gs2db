<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>
        <div>
            <input id="spreadsheet_url" type="text"  placeholder="googlesheet url" required>
            <button id="BTN" >manda link</button>
        </div>
    </body>

    <script>

        $('#BTN').on('click', () => {
            req ('GET', './spreadtodb.php', { spreadsheet_url: $('#spreadsheet_url').val()} );
        });

        const req = (method, url, data) => {

            $.ajax({
                type: method,
                url: url,
                data: data,
                success: (response) => {
                    console.log(response);
                },
                error: (xhr) => {
                    console.log(xhr);
            }

        });
        }

    </script>

</html>



