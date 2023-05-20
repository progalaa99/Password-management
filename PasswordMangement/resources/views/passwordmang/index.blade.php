<h1> index passwordmang</h1>
<form action="{{ route('store') }}" method="POST" >
    <label >
        <span >
            name
        </span>
        <input type="text" name="title"/>
    </label> <br>
    <label >
        <span >
            password
        </span>
        <input type="text" name="title"/>
        <button type="submit">send</button>
    </label> <br>
</form>