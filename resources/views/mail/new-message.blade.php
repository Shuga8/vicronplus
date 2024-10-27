<html>

    <body style="width: 100%">

        <div style="margin: 10px 5px;">

            <h1 style="font-size: 18px;font-weight:600;color: #333;text-transform: uppercase;">You just recieved a
                message
            </h1>

            <p style="font-size: 15px;font-weight:400;color: #333;">Details</p>


            <div style="padding: 14px 20px;">
                <p style="margin:10px 0px; font-size: 15px;font-weight:400;color: #02312d;">NAME:
                    {{ $data['firstname'] }} {{ $data['lastname'] }}</p>

                <p style="margin:10px 0px; font-size: 15px;font-weight:400;color: #02312d;">EMAIL: {{ $data['email'] }}
                </p>

                <div style="margin:10px 0px; font-size: 15px;font-weight:400;color: #050231;">
                    {!! $data['message'] !!}
                </div>

            </div>
        </div>
    </body>

</html>
