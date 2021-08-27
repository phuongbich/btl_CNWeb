<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don xin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/entry.css">
</head>
<body>
   
  <form class="container" id="form_1">
    <h3>利用規約 </h3>  
    <div class="form-group row">
      <label for="rules" class=" col-md-3 col-sm-12  col-form-label">Điều khoản và điều kiện thông tin cần thiết
        <br> <span>ひっす(Nhập thông tin cần thiết)</span>
      </label>
      <div class="col-md-9 col-sm-12">
        <textarea multiple class="form-control" name="rules" rows="3" >
          皆様の個人情報は職業紹介に伴うことに対して、収集し、使用されます。
          収集された個人情報は、事前にご本人の許可を得ないで別の目的で使用することはありません。
          また、私たちは、他の目的で第三者に個人情報の使用を許可することはありません。
        </textarea>
      </div>
    </div>
    <div class="row form-inline">
      <label class="offset-3" >
        <input type="radio" name="agree" value="yes">
        どうい(Đồng ý)
      </label>
      <label class="offset-1"  >
        <input type="radio" name="agree" value="no">
        どういしない(Không đồng ý)
      </label>
    </div>
    <div  id="form_2">
      <h3>基本情報 </h3>
      <div class="form-group row ">
        <label for="nameHissu" class=" col-md-3 col-sm-12 col-form-label">なまえ　Họ tên
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12 ">
          <input type="text" class="form-control " name="nameHissu" id="nameHissu">
          <p style="color:red;" class="message"></p>
        </div>
      </div>
  
      <!-- <div class="form-group row">
        <label for="nameFurigana" class=" col-md-3 col-sm-12 col-form-label">フリガナ
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="nameFurigana"  id="nameFurigana">
          <p style="color:red;" class="message"></p>
        </div>
      </div> -->
      <div class="row ">
        <label for="nameFurigana" class=" col-md-3 col-sm-12col-form-label">せいべつ　Giới tính
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <label  >
          <input type="radio" name="sex" value="male">
          おとこ 
        </label>
        <label class="offset-1"  >
          <input type="radio" name="sex" value="female">
          おんな
        </label>
      </div>
      
      <div class="row"  id="birthday">
        <label for="birthday" class=" col-md-3 col-sm-12 form-control-sm">たんじょうび　Ngày sinh
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        
        <select name="birthday[year]">
          <option selected ="selected"> ---- </option>
          
          <option >2003</option> <option >2002</option> <option >2001</option> <option >2000</option>
          <option >1999</option> <option >1998</option> <option >1997</option> <option >1996</option>
          <option >1995</option> <option >1995</option> <option >1993</option> <option >1992</option>
          <option >1991</option>  <option >1990</option>  <option >1989</option>  <option >1988</option>
          <option >1987</option>  <option >1986</option>  <option >1985</option>  <option >1984</option>
          <option >1983</option>  <option >1982</option>  <option >1982</option>  <option >1981</option>
          <option >1980</option>   
        </select>
        <label  >  年 </label>
        <select name="birthday[month]" >
          <option selected ="selected"> ---- </option>
          <option>12</option> <option>11</option> <option>10</option> <option>9</option>
          <option>8</option> <option>7</option> <option>6</option> <option>5</option>
          <option>4</option> <option>3</option> <option>2</option> <option>1</option>
        </select>
        <label  >月 </label>
        <select name="birthday[day]">
          <option selected ="selected"> ---- </option>
          <option>31</option> <option>30</option> <option>29</option> <option>28</option>
          <option>27</option> <option>26</option> <option>25</option> <option>24</option>
          <option>23</option> <option>22</option> <option>21</option> <option>20</option>
          <option>19</option> <option>18</option> <option>17</option> <option>16</option>
          <option>15</option> <option>14</option> <option>13</option> <option>12</option>
          <option>11</option> <option>10</option> <option>09</option> <option>08</option>
          <option>07</option> <option>06</option> <option>05</option> <option>04</option>
          <option>03</option> <option>02</option> <option>01</option>
        </select>
        <label  >日</label>
      </div>
      <div class="form-group row ">
      <label for="tel" class=" col-md-3 col-sm-12 col-form-label">けいたい　ばんごう　Tel
        <br> <span>ひっす(Nhập thông tin cần thiết)</span>
      </label>
      <div class="col-md-9 col-sm-12 form-inline">
        <input type="text"  name="tel[0]" placeholder="0000" >
        <p style="padding:1% 1%" >-</p>
        <input type="text" class="" name="tel[1]" placeholder="0000" >
        <p style="padding:1% 1%">-</p>
        <input type="text" class="" name="tel[2]" placeholder="0000" >
      </div>
    </div>
    <div class="form-group row">
        <label for="address" class=" col-md-3 col-sm-12 col-form-label">じゅうしょ　Địa chỉ
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="address" id="address">
          <p style="color:red;" class="message"></p>
        </div>
    </div>
    <div class="form-group row">
        <label for="schoolNow" class=" col-md-3 col-sm-12 col-form-label">がっこう　の　なまえ <br> Tên trường đang học
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="schoolNow" id="schoolNow">
          <p style="color:red;" class="message"></p>
        </div>
    </div>
    <div class="form-group row">
        <label  class=" col-md-3 col-sm-12 col-form-label">さいしゅう　がくれき<br>  Mức cao nhất của giáo dục
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12" style="background-color:#F5F5F5; padding:3%">
          <label class="col-md-9 col-sm-12"  for="degree">
            <input type="radio" name="degree" value="university">
            だいがく/University
          </label>
          <label class="col-md-9 col-sm-12" for="degree">
            <input type="radio" name="degree" value="hightSchool">
            こうこう/High School
          </label>
          <label class="col-md-9 col-sm-12" for="degree">
            <input type="radio" name="degree" value="vocational">
            せんもんがっこう/Vocational school
          </label>
        </div>
    </div>
    <div class="form-group row">
        <label  class=" col-md-3 col-sm-12 col-form-label">にほんごレベル　Năng lực tiếng nhật
          
        </label>
        <div class="col-md-9 col-sm-12" style="background-color:#F5F5F5; padding:3%">
          <label style="margin-right:2%"  for="degreeJapan">
            <input type="radio" name="degreeJapan" value="n1">
            N1
          </label>
          <label style="margin-right:2%" for="degreeJapan">
            <input type="radio" name="degreeJapan" value="n2">
            N2
          </label>
          <label  style="margin-right:2%" for="degreeJapan">
            <input type="radio" name="degreeJapan" value="n3">
            N3
          </label>
          <label  style="margin-right:2%"  for="degreeJapan">
            <input type="radio" name="degreeJapan" value="n4">
            N4
          </label>
          <label style="margin-right:2%" for="degreeJapan">
            <input type="radio" name="degreeJapan" value="n5">
            N5
          </label>
        </div>
    </div>
      
    <div class="row ">
        <label for="time" class=" col-md-3 col-sm-12 col-form-label">いつ　にほん　に　きましたか？ <br> Bạn đến nhật từ khi nào
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        
        <select name="time" class="col-md-9 col-sm-12 form-control-lg">
          <option selected ="selected"> ---- </option>
          
          <option label="2011年1月～6月" value="2011年1月～6月">2011年1月～6月</option>
          <option label="2011年7月～12月" value="2011年7月～12月">2011年7月～12月</option>
          <option label="2012年1月～6月" value="2012年1月～6月">2012年1月～6月</option>
          <option label="2012年7月～12月" value="2012年7月～12月">2012年7月～12月</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="linkFacebook" class=" col-md-3 col-sm-12 col-form-label">Facebookのなまえ
          <!-- <br> <span>ひっす(Nhập thông tin cần thiết)</span> -->
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="linkFacebook">
        </div>
      </div>
      
      <div class="row ">
        <label for="station" class=" col-md-3 col-sm-12 col-form-label">いえ　に　ちかい　えき
          <br> Ga gần nhất（nhà)
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        
        <select name="station" class="col-md-9 col-sm-12 form-control-lg">
          <option selected ="selected"> ---- </option>
          
          <option label="2011年1月～6月" value="2011年1月～6月">2011年1月～6月</option>
          <option label="2011年7月～12月" value="2011年7月～12月">2011年7月～12月</option>
          <option label="2012年1月～6月" value="2012年1月～6月">2012年1月～6月</option>
          <option label="2012年7月～12月" value="2012年7月～12月">2012年7月～12月</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="SchoolNoChoose" class=" col-md-3 col-sm-12 col-form-label">いえ　に　ちかい　えき
          <br> (nhà）Không có lựa chọn
          <!-- <br> <span>ひっす(Nhập thông tin cần thiết)</span> -->
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="SchoolNoChoose">
        </div>
      </div>
      <div class="row ">
        <label for="school" class=" col-md-3 col-sm-12 col-form-label">がっこう　に　ちかい　えき
          <br> （Trường học）
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        
        <select name="school" class="col-md-9 col-sm-12 form-control-lg">
          <option selected ="selected"> ---- </option>
          
          <option label="2011年1月～6月" value="2011年1月～6月">2011年1月～6月</option>
          <option label="2011年7月～12月" value="2011年7月～12月">2011年7月～12月</option>
          <option label="2012年1月～6月" value="2012年1月～6月">2012年1月～6月</option>
          <option label="2012年7月～12月" value="2012年7月～12月">2012年7月～12月</option>
        </select>
      </div>
      
      <div class="form-group row">
        <label for="schoolNoChoose" class=" col-md-3 col-sm-12 col-form-label">がっこう　に　ちかい　えき
          <br> （Trường học）Không có lựa chọn
          <!-- <br> <span>ひっす(Nhập thông tin cần thiết)</span> -->
        </label>
        <div class="col-md-9 col-sm-12">
          <input type="text" class="form-control" name="schoolNoChoose">
        </div>
      </div>
      <div class="form-group row">
        <label  class=" col-md-3 col-sm-12 col-form-label">がっこう　の　じかん
          <br><span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12" style="background-color:#F5F5F5; padding:3%">
          <label class="col-md-9 col-sm-12"  for="Gakko">
            <input type="radio" name="Gakko" >
            ① Gozen / AM
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ② Đi / Chiều
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ③ Gosen-Yugata
          </label>
        </div>
    </div>
    <div class="form-group row">
        <label  class=" col-md-3 col-sm-12 col-form-label">はたらく　ことが　できる　じかん
          <br><span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12" style="background-color:#F5F5F5; padding:3%">
          <label class="col-md-9 col-sm-12"  for="Gakko">
            <input type="radio" name="Gakko" >
            ① あさ6じ～あさ9じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ② あさ9じ～ひる12じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ④　ひる3じ～ゆうがた6じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ⑤　ゆうがた6じ～よる9じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ⑥　よる9じ～よる12じ
          </label>
          <label class="col-md-9 col-sm-12" for="Gakko">
            <input type="radio" name="Gakko" >
            ⑦　よる12じ～あさ6じ
          </label>
        </div>
    </div>
    <div class="form-group row">
        <label  class=" col-md-3 col-sm-12 col-form-label">はたらく　ことが　できる　ようび
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12" style="background-color:#F5F5F5; padding:3%">
          <label style="margin-right:2%"  for="timeWork">
            <input type="radio" name="timeWork" >
            月
          </label>
          <label style="margin-right:2%" for="timeWork">
            <input type="radio" name="timeWork" >
            火 
          </label>
          <label  style="margin-right:2%" for="timeWork">
            <input type="radio" name="timeWork">
            水
          </label>
          <label  style="margin-right:2%"  for="timeWork">
            <input type="radio" name="timeWork" >
            木 
          </label>
          <label style="margin-right:2%" for="timeWork">
            <input type="radio" name="timeWork" >
            金
          </label>
          <label style="margin-right:2%" for="timeWork">
            <input type="radio" name="timeWork" >
            土
          </label>
          <label style="margin-right:2%" for="timeWork">
            <input type="radio" name="timeWork" >
            日    
          </label>
        </div>
    </div>
    <div class="form-group row">
        <label for="friend" class=" col-md-3 col-sm-12 col-form-label">しょうかい　して　くれた　ともだち
           の　でんわばんごう　と　なまえ
          <!-- <br> <span>ひっす(Nhập thông tin cần thiết)</span> -->
        </label>
        <div class="col-md-9 col-sm-12">
          <textarea name="friend" class="form-control" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="idCard" class=" col-md-3 col-sm-12 col-form-label">ざいりゅう　かーど　ばんごう
          <br>  (con số)
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        <div class="col-md-9 col-sm-12">
          <input name="idCard" class="form-control" placeholder="ABC123EF" id="idCard" ></input>
          <p class="message" style="color:red; padding:1%"></p>
        </div>
      </div>
      <div class="row " id="timeCard">
        <label for="timeCard" class=" col-md-3 col-sm-12 form-control-sm">たんじょうび　Ngày sinh
          <br> <span>ひっす(Nhập thông tin cần thiết)</span>
        </label>
        
        <select name="timeCard[year]">
          <option selected ="selected"> ---- </option>
          
          <option >2021</option> <option >2022</option> <option >2023</option> <option >2024</option>
          <option >2025</option> <option >2026</option> <option >2027</option> <option >2028</option>
          <option >2029</option> <option >2030</option> <option >2031</option>  
        </select>
        <label  >  年 </label>
        <select name="timeCard[month]" >
          <option selected ="selected"> ---- </option>
          <option>12</option> <option>11</option> <option>10</option> <option>9</option>
          <option>8</option> <option>7</option> <option>6</option> <option>5</option>
          <option>4</option> <option>3</option> <option>2</option> <option>1</option>
        </select>
        <label  >月 </label>
        <select name="timeCard[day]">
          <option selected ="selected"> ---- </option>
          <option>31</option> <option>30</option> <option>29</option> <option>28</option>
          <option>27</option> <option>26</option> <option>25</option> <option>24</option>
          <option>23</option> <option>22</option> <option>21</option> <option>20</option>
          <option>19</option> <option>18</option> <option>17</option> <option>16</option>
          <option>15</option> <option>14</option> <option>13</option> <option>12</option>
          <option>11</option> <option>10</option> <option>09</option> <option>08</option>
          <option>07</option> <option>06</option> <option>05</option> <option>04</option>
          <option>03</option> <option>02</option> <option>01</option>
        </select>
        <label  >日</label>
      </div>
    </div>
  </form>
  <div class="d-flex justify-content-center "  id="btnNext">
    <button class="btn-primary mt-0 mb-4 p-2"  type="submit"> Next</button>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
  <script >
    Validator({
    form: '#form_2',
    rules : [
      Validator.isRequied('#nameHissu'),
      Validator.isRequied('#nameFurigana'),
      Validator.isRequied('#address'),
      Validator.isRequied('#idCard'),
      Validator.isRequied('#schoolNow'),
    ] 
  })
  </script>
</body>
</html>