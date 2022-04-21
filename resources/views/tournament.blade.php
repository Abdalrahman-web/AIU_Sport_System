@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        /* Part 1, background color for inside & outside container*/

body{
    margin: 5px;

}

.Container{
    display: flex;
    margin-top: 10px;
}

/* Part 2: Branch Style, Branch Size & Display*/
.Branch_1{
    height: 620px; /*new value for symmetrical bracket 8 players*/
    width: 400px;
    flex-wrap: wrap;
    display: flex;

}

.Branch_2{
    height: 620px; /*new value for symmetrical bracket 8 players*/
    width: 400px;
    flex-wrap: wrap;
    display: flex;
}

.Branch_3{
    height: 620px; /*new value for symmetrical bracket 8 players*/
    width: 400px;
    flex-wrap: wrap;
    display: flex;
}
/* Part 3: Object style*/

.Object_1:nth-child(even) , .Object_2:nth-child(even) , .Object_3:nth-child(even){
display: grid;
grid-template-columns: 230px 100px;
grid-template-rows: 50px 50px;
background-color: rgb(153, 153, 153);
width: 300px;
padding-top: 4px;
padding-left: 4px;
}

.Object_1:nth-child(odd) , .Object_2:nth-child(odd) , .Object_3:nth-child(odd){
    display: grid;
    grid-template-columns: 230px 100px;
    grid-template-rows: 50px 50px;
    background-color: rgb(110, 110, 110);
    width: 300px;
    padding-top: 4px;
    padding-left: 4px;
    }

.Name_Forward{
    display: flex;
    align-items: center;
    width: 200px;
    height: 40px;
    font-size: 20px;
    border-radius: 4px;
    background-color: white;
}

/* Part 4: Match data sizes*/
select{
    width: 40px;
    height: 40px;
    font-size: 20px;
    border-radius: 4px;
}

select.Name{
width: 210px;
height: 40px;
font-size: 20px;
border-radius: 4px;
}
/* */
.Match{
    height: 150px; /*new value for symmetrical bracket 8 players*/
}

.Object_2{
    margin-top: 25%; /*new value for symmetrical bracket 8 players*/
}

.Match_02{
    height: 300px; /*new value for symmetrical bracket 8 players*/
}

.Object_3{
    margin-top: 75%; /*new value for symmetrical bracket 8 players*/
}

.Match_03{
    height: 600px; /*new value for symmetrical bracket 8 players*/
}
/* */

.First:hover{
    background-color: chocolate;
    color: white;
    font-size: 30px;
    border-radius: 6px;
    padding: 5px;
}

.First{
    background-color: rgb(105, 44, 0);
    color: white;
    font-size: 30px;
    border-radius: 6px;
    padding: 5px;
}

label.number{
    font-size: 30px;
}

.Link_Style{
    margin-top: 0px;
}
    </style>
    <title>Bracket</title>
</head>
<body>
    <br/>
    <h1 class="text-center text-dark">Welcome To AIU Tournament</h1>
    <h5 class="text-center text-blue">make your tournament</h5>
    <hr style="border-top: 1px double #8c8b8b;">
    <div>
        <div class="Link_Style">
            <label> <a target="_blank" class="btn btn-dark" href="https://docs.google.com/spreadsheets/d/1cDV0v7y7j991Z7Ube9k3fXBI2m5nAIfICOAWkieDQNg/edit?usp=sharing">Player List</a></label>
        </div>

        <form name = "formId0" class="formId0">
            <label class="number">Current Battle Mode First To</label>

            <select name="Result0" id="Result0" class="ResulT00 ResulT0">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select> <label class="number">Wins</label>

        </form>

    </div>

    <div class="Container"> <!--part 1: Branch 1 going to contain everything 1x of this-->
    <!-------------------------1-------------------------------------------->
        <div class="Branch_1"><!--Part 2: The part which contain each 4 of the matches in this branch.-->
            
            <div class="Match">
            <div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

                <div><select class="Name"   type="text" placeholder="Player 1" id="Player1"></select></div>  <!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId1" class="Result">
                <select id="Result1"> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                </form>
                </div>

                <div><select class="Name" type="text" id="Player2"></select></div><!--Part 4: Name of player 8x of this-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId2" class="Result">
                <select id="Result2"> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                </form>
                </div>
            </div>

            </div>
<!----------------------------------2----------------------------------->
            <div class="Match">
            <div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

                <div><select class="Name" type="text" id="Player3"></select></div><!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId3" class="Result">
                <select id="Result3"> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                </form>
                </div>

                <div><select class="Name" type="text" id="Player4"></select></div><!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId4" class="Result">
                <select id="Result4"> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                </form>
                </div>
                </div>
            </div>
<!---------------------------------3 (Half)------------------------------------>
<div class="Match">
<div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

    <div><select class="Name" type="text" id="Player5"></select></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId5" class="Result">
    <select id="Result5"> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    </form>
    </div>

    <div><select class="Name" type="text" id="Player6"></select></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId6" class="Result">
    <select id="Result6"> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    </form>
    </div>
</div>
</div>
<!------------------------------------4--------------------------------->
<div class="Match">
<div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

    <div><select class="Name" type="text" id="Player7"></select></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId7" class="Result">
    <select id="Result7"> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    </form>
    </div>

    <div><select class="Name" type="text" id="Player8"></select></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId8" class="Result">
    <select id="Result8"> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    </form>
    </div>
</div>
</div>

        </div>
<!------------------Quarter-Finals------------------------------------->
<!-----------------------Branch 1 ends here---------------------------->
<!--------------------------------------------------------------------->
<div class="Branch_2"><!--Part 2: The part which contain each 2 of the matches. In this branch-->
    <div class="Match_02">       
    <div class="Object_2"> <!--Part 3: Name of player & Result 2x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player9">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 8x of this-->
        <form name="FormId9" class="Result">
        <select id="Result9"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player10">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId10" class="Result">
        <select id="Result10"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>
</div> 
    </div>
<!----------------------------------2 (half)----------------------------------->
<div class="Match_02">
<div class="Object_2"> <!--Part 3: Name of player & Result 2x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player11">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId11" class="Result">
        <select id="Result11"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player12">Player</div><!--Part 4: Name of player 8x of this-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId12" class="Result">
        <select id="Result12"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>
</div>
    </div>

</div>
<!-------------------------Semi-Finals--------------------------------->
<!-----------------------Branch 2 ends here---------------------------->
<!--------------------------------------------------------------------->

<div class="Branch_3"><!--Part 2: The part which contain 1 of the matches.-->
    <div class="Match_03">       
    <div class="Object_3"> <!--Part 3: Name of player & Result 1x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player13">Player</div><!--Part 2: Name of player 2x of this in this branch-->

        <div> <!--Part 4: Results 2x of this in this branch-->
        <form name="FormId13" class="Result">
        <select id="Result13"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player14">Player</div><!--Part 2: Name of player 2x of this in this branch-->

        <div> <!--Part 4: Results 2x of this in this branch-->
        <form name="FormId14" class="Result">
        <select id="Result14"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>
</div>
    </div>

</div>
<!------------------------------Finals--------------------------------->
<!-----------------------Branch 3 ends here---------------------------->
<!--------------------------------------------------------------------->
    </div>

    <script>
        let url = 'https://docs.google.com/spreadsheets/d/1cDV0v7y7j991Z7Ube9k3fXBI2m5nAIfICOAWkieDQNg/gviz/tq?';
const query = encodeURIComponent('Select A');
url = url + '&tq=' + query;

fetch(url)
.then(res => res.text())
.then(rep =>{

const data = JSON.parse(rep.substr(47).slice(0,-2));

const row01 = document.createElement('tr');
Player1.append(row01);
const row02 = document.createElement('tr');
Player2.append(row02);
const row03 = document.createElement('tr');
Player3.append(row03);
const row04 = document.createElement('tr');
Player4.append(row04);
const row05 = document.createElement('tr');
Player5.append(row05);
const row06 = document.createElement('tr');
Player6.append(row06);
const row07 = document.createElement('tr');
Player7.append(row07);
const row08 = document.createElement('tr');
Player8.append(row08);

data.table.cols.forEach((heading)=>{
const cell = document.createElement('option');
cell.textContent = heading.label;

row01.append(cell);
row02.append(cell);
row03.append(cell);
row04.append(cell);
row05.append(cell);
row06.append(cell);
row07.append(cell);
row08.append(cell);
})

data.table.rows.forEach((main)=>{
const container1 = document.createElement('option');
Player1.append(container1);

const container2 = document.createElement('option');
Player2.append(container2);

const container3 = document.createElement('option');
Player3.append(container3);

const container4 = document.createElement('option');
Player4.append(container4);

const container5 = document.createElement('option');
Player5.append(container5);

const container6 = document.createElement('option');
Player6.append(container6);

const container7 = document.createElement('option');
Player7.append(container7);

const container8 = document.createElement('option');
Player8.append(container8);


main.c.forEach((element)=> {

    const cell1 =  document.createElement('option');
    cell1.textContent = element.v;

    const cell2 =  document.createElement('option');
    cell2.textContent = element.v;

    const cell3 =  document.createElement('option');
    cell3.textContent = element.v;

    const cell4 =  document.createElement('option');
    cell4.textContent = element.v;

    const cell5 =  document.createElement('option');
    cell5.textContent = element.v;

    const cell6 =  document.createElement('option');
    cell6.textContent = element.v;

    const cell7 =  document.createElement('option');
    cell7.textContent = element.v;

    const cell8 =  document.createElement('option');
    cell8.textContent = element.v;


    container1.append(cell1);
    container2.append(cell2);
    container3.append(cell3);
    container4.append(cell4);
    container5.append(cell5);
    container6.append(cell6);
    container7.append(cell7);
    container8.append(cell8);

})
})
})

const Result00 = document.getElementById("Result0");
//------------------------Box 1-------------------------------
{
    const Res01 = document.getElementById("Result1");
    const Res02 = document.getElementById("Result2");

    const Name01 = document.getElementById("Player1");
    const Name02 = document.getElementById("Player2");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 === parseInt(Result00.value)){
            document.getElementById("Player9").innerHTML = Name01.value;

        } else if (Result01 != parseInt(Result00.value)){
            document.getElementById("Player9").innerHTML = "";            
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 === parseInt(Result00.value)){
            document.getElementById("Player9").innerHTML = Name02.value;

        } else if (Result02 != parseInt(Result00.value)){
            document.getElementById("Player9").innerHTML = "";            
        }
    })

}
//------------------------Box 2-------------------------------
{
    const Res01 = document.getElementById("Result3");
    const Res02 = document.getElementById("Result4");

    const Name01 = document.getElementById("Player3");
    const Name02 = document.getElementById("Player4");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 === parseInt(Result00.value)){
            document.getElementById("Player10").innerHTML = Name01.value;

        } else if (Result01 != parseInt(Result00.value)){
            document.getElementById("Player10").innerHTML = "";            
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 === parseInt(Result00.value)){
            document.getElementById("Player10").innerHTML = Name02.value;

        } else if (Result02 != parseInt(Result00.value)){
            document.getElementById("Player10").innerHTML = "";            
        }
    })

}
//------------------------Box 3-------------------------------
{
    const Res01 = document.getElementById("Result5");
    const Res02 = document.getElementById("Result6");

    const Name01 = document.getElementById("Player5");
    const Name02 = document.getElementById("Player6");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 === parseInt(Result00.value)){
            document.getElementById("Player11").innerHTML = Name01.value;

        } else if (Result01 != parseInt(Result00.value)){
            document.getElementById("Player11").innerHTML = "";            
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 === parseInt(Result00.value)){
            document.getElementById("Player11").innerHTML = Name02.value;

        } else if (Result02 != parseInt(Result00.value)){
            document.getElementById("Player11").innerHTML = "";            
        }
    })

}
//------------------------Box 4-------------------------------
{
    const Res01 = document.getElementById("Result7");
    const Res02 = document.getElementById("Result8");

    const Name01 = document.getElementById("Player7");
    const Name02 = document.getElementById("Player8");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 === parseInt(Result00.value)){
            document.getElementById("Player12").innerHTML = Name01.value;

        } else if (Result01 != parseInt(Result00.value)){
            document.getElementById("Player12").innerHTML = "";            
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 === parseInt(Result00.value)){
            document.getElementById("Player12").innerHTML = Name02.value;

        } else if (Result02 != parseInt(Result00.value)){
            document.getElementById("Player12").innerHTML = "";            
        }
    })

}

//------------------------Semi Finals Box 1-------------------------------

{
    const Res01 = document.getElementById("Result9");
    const Res02 = document.getElementById("Result10");

    const Name01 = document.getElementById("Player9");
    const Name02 = document.getElementById("Player10");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 === parseInt(Result00.value)){
            document.getElementById("Player13").innerHTML = Name01.innerHTML;

        } else if (Result01 != parseInt(Result00.value)){
            document.getElementById("Player13").innerHTML = "";            
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 === parseInt(Result00.value)){
            document.getElementById("Player13").innerHTML = Name02.innerHTML;

        } else if (Result02 != parseInt(Result00.value)){
            document.getElementById("Player13").innerHTML = "";            
        }
    })

}
//------------------------Semi Finals Box 2-------------------------------
{
    const Res01 = document.getElementById("Result11");
    const Res02 = document.getElementById("Result12");

    const Name01 = document.getElementById("Player11");
    const Name02 = document.getElementById("Player12");

    Res01.addEventListener("change",()=>{
        let Result01 = parseInt(Res01.value);

        if(Result01 === parseInt(Result00.value)){
            document.getElementById("Player14").innerHTML = Name01.innerHTML;

        } else if (Result01 != parseInt(Result00.value)){
            document.getElementById("Player14").innerHTML = "";            
        }
    })
    Res02.addEventListener("change",()=>{
        let Result02 = parseInt(Res02.value);

        if(Result02 === parseInt(Result00.value)){
            document.getElementById("Player14").innerHTML = Name02.innerHTML;

        } else if (Result02 != parseInt(Result00.value)){
            document.getElementById("Player14").innerHTML = "";            
        }
    })

}
    </script>
</body>
</html>

@endsection