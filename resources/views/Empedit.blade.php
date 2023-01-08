<style>
    .model {
        margin-top: 150px;
        border: 1px solid black;
        padding-top: 30px;
        padding-bottom: 20px;
        padding-left: 50px;
        width: 30%;
    }
    .alert-danger{
        color: red;
    }
</style>
<center>
    <div class="model">
        <form method="POST" action="/Update">
            <input type="hidden" name="sno" value='{{ $employee->sno }}'><br>
            <lable><b>Ename :</b></lable>
            <input type="text" name="Ename" value='{{ $employee->Ename }}'><br>
            @error('Ename')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <lable><b>Email : </b></lable>
            <input type="email" name="Email" value='{{ $employee->Email }}'><br>
            @error('Email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <lable><b>Phone : </b></lable>
            <input type="tel" name="phone" value='{{ $employee->phone }}'><br>
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <lable><b>Address : </b></lable>
            <input type="text" name="address" value='{{ $employee->address }}'><br>
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <lable><b>DOJ : </b></lable>
            <input type="date" name="dateofjoin" value='{{ $employee->Doj }}'><br>
            @error('dateofjoin')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <lable><b>Salary : </b></lable>
            <input type="number" name="salary" value='{{ $employee->salary }}'><br>
            @error('salary')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="hidden" name="_token" value="<?= csrf_token() ?>">
            <input type="submit" value="submit">
        </form>
    </div>
</center>
