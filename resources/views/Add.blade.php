<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        User Info
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <style>
        table {
            font-family: Calibri;

            font-size: 15pt;
            font-style: normal;
            font-weight: bold;
            text-align: ;


        }

        .required-field::after {
            content: "*";
            color: red;
        }

        table.inner {
            border: 0px
        }

    </style>
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
        <a href="/" class="navbar-brand col-sm-3 col-md-2 mr-0" href="">User Info</a>
    </nav>

    <!-- Side Bar -->
    <div class="" style="margin-top:40px;">

        {{-- <div class=" mt-5 ml-0 mr-0 text-center" width=100%; > --}}

        <div class="jumbotron">
            <a href="/" type="button" class="btn btn-success">Back</a>
            <h1 class="text-center" style="color: rgb(26, 26, 172)">Add User Information</h1><br>

            <form action="{{ route('add-info') }}" method="POST">
                {{ csrf_field() }}

                <table align="center" cellpadding="10">

                    <!----- First Name ---------------------------------------------------------->
                    <tr>
                        <td class="required-field">FIRST NAME :</td>
                        <td><input type="text" placeholder="Ravi" name="fname" />
                            @error('fname')
                                <span class="text-danger">The First name field is required. </span>
                            @enderror

                        </td>
                    </tr>

                    <!----- Last Name ---------------------------------------------------------->
                    <tr>
                        <td>LAST NAME :</td>
                        <td><input type="text" placeholder="kumar" name="lname" />
                            {{-- @error('lname')
    <span class="text-danger">The Last name field is required. </span>  
    @enderror --}}

                        </td>
                    </tr>

                    <!----- Date Of Birth -------------------------------------------------------->
                    <tr>
                        <td class="required-field">DATE OF BIRTH :</td>

                        <td>
                            <select name="B_day" id="B_Day">

                                <option value=" ">Day:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>

                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>

                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>

                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            @error('B-Day')
                                <span class="text-danger">The Date of Birth field is required. </span>
                            @enderror

                            <select id="B_Month" name="B_Month">

                                <option value="">Month:</option>
                                <option value="January">Jan</option>
                                <option value="February">Feb</option>
                                <option value="March">Mar</option>
                                <option value="April">Apr</option>
                                <option value="May">May</option>
                                <option value="June">Jun</option>
                                <option value="July">Jul</option>
                                <option value="August">Aug</option>
                                <option value="September">Sep</option>
                                <option value="October">Oct</option>
                                <option value="November">Nov</option>
                                <option value="December">Dec</option>
                            </select>
                            @error('B-Month')
                                <span class="text-danger">The Date of Birth field is required. </span>
                            @enderror

                            <select name="B_Year" id="B_Year">


                                <option value="">Year:</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>

                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>

                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>

                            </select> @error('B_Year')
                                <span class="text-danger">The Date of Birth field is required. </span>
                            @enderror
                        </td>
                    </tr>

                    <!----- Email Id ---------------------------------------------------------->
                    <tr>
                        <td class="required-field">EMAIL :</td>
                        <td><input type="text" placeholder="xyz@gmail.com" name="email" maxlength="100" />
                            @error('email')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </td>
                    </tr>

                    <!----- Mobile Number ---------------------------------------------------------->
                    <tr>
                        <td class="required-field">MOBILE :</td>
                        <td>
                            <input type="text" placeholder="1234567890" name="mobile" maxlength="10" />
                            <i style="font-weight: 100">(10 Digit Number)</i>
                            @error('mobile')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </td>
                    </tr>

                    <tr>
                        <td class="required-field">DESIGNATION :</td>
                        <td><input type="text" placeholder="Software Engineer" name="designation" />
                            @error('designation')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror

                        </td>
                    </tr>

                    <!----- Gender ----------------------------------------------------------->
                    <tr>
                        <td class="required-field">GENDER :</td>
                        <td style="font-weight: 200">
                            Male <input type="radio" name="gender" value="Male" />
                            Female <input type="radio" name="gender" value="Female" />
                            Other <input type="radio" name="gender" value="Other" />
                            @error('gender')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </td>
                    </tr>


                    <!----- Hobbies ---------------------------------------------------------->

                    <tr>
                        <td class="required-field">HOBBIES :</td>

                        <td style="font-weight: 200">
                            Drawing
                            <input type="checkbox" name="hobbies" value="Drawing" />
                            Singing
                            <input type="checkbox" name="hobbies" value="Singing" />
                            Dancing
                            <input type="checkbox" name="hobbies" value="Dancing" />
                            Others
                            <input type="checkbox" name="hobbies" value="Others" />
                            @error('hobbies')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                            <br />
                        </td>
                    </tr>
            </form>

            <!----- Submit and Reset ------------------------------------------------->
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" class="btn btn-danger" value="Submit">
                    <input type="reset" class="btn btn-primary" value="Reset">
                </td>
            </tr>
            </table>

            </form>





            {{-- <div class="form-group"> --}}
        </div>
        <!-- Boostrap JavaScript -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/all.min.js"></script>
        <script src="../js/custom.js"></script>
</body>

</html>
