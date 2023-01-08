
<style>
.models {
       margin-top: 150px;
       border:1px solid black;
       padding-top:30px;
       padding-bottom:20px;
       padding-left:50px;
       width:30%;
     }
     .alert-danger{
        color: red;
    }
</style>

<center>
    <div class="models">
    <form method="POST" action="/Create">
        <lable><b>Ename : </b></lable>
        <input type="text" name="Ename"><br>
        @error('Ename')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <lable><b>Email : </b></lable>
        <input type="email" name="Email" ><br>
        @error('Email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <lable><b>Phone : </b></lable>
        <input type="tel" name="phone" ><br>
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <lable><b>Address : </b></lable>
        <input type="text" name="address" ><br>
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <lable><b>DOJ : </b></lable>
        <input type="date" name="dateofjoin"><br>
        @error('dateofjoin')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <lable><b>Salary : </b></lable>
        <input type="number" name="salary" ><br>
        @error('salary')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        <input type="submit" value="submit">
    </form>
    </div>
    </center>

