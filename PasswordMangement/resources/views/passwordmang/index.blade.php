<h1> index passwordmang</h1>
<form action="{{ route('store') }}" method="POST" >
   
    @csrf
    <label >
        <span >
            name
        </span>
        <input type="text"  name="name"  />
    </label> <br>
    <label >
        <span >
            password
        </span>
        <input type="text" name="password"/>
        <button type="submit">send</button>
    </label> <br>
</form>