<div style="margin: auto;
width: 50%;
border: 2px solid rgb(207, 207, 207);
padding: 10px; text-align:center; margin-top:5rem">
    <h3>Sending Email</h3>
    <form action="{{ route('sendmail') }}" method="POST">
        @csrf
        <div style="margin-bottom:1rem">
            <label for="" style="margin-right:3rem"> Name: </label>
            <input type="text" name="username">
        </div>
        <div style="margin-bottom:1rem">
            <label for="" style="margin-right:2.4rem"> Subject: </label>
            <input type="text" name="subject">
        </div>
        <div style="margin-bottom:1rem">
            <label for="" style="margin-right:3rem"> Email: </label>
            <input type="email" name="email">
        </div>
        <div style="margin-bottom:1rem">
            <label for="" style="margin-right:2rem"> Message: </label>
            <textarea rows="4" cols="22" name="message"></textarea>
        </div>

        <br>
        <br>
        <button style="text-align: right">Send</button>
    </form>
</div>
