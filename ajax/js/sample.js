function createRequest()
{
  var myRequest;
  if(window.XMLHttpRequest)
  {
    myRequest=new XMLHttpRequest();
  }
  else
  {
    myRequest=new ActiveXObject("Microsoft.XMLHTTP");
  }
  return myRequest;
}
function myMemberInfo()
{
  var myRequest=createRequest();
  myRequest.onreadystatechange=myDate;
  myRequest.open("GET","select.php",true);
  myRequest.send();
}
function myDate()
{
  var tableInfo=document.getElementById("updateMe");
  if(this.readyState==4 && this.status==200)
  {
    tableInfo.innerHTML=this.responseText;
  }
  else if(this.readyState>0 && this.readyState<4)
  {
    tableInfo.innerHTML="<img src='img/spinner.gif' style='width:50px;height:50px;'/>";
  }
  else
  {
    tableInfo.innerHTML="<p>There is something wrong with your request</p>"
  }
}
myMemberInfo();
document.getElementById("updateThis").onclick=myMemberInfo;
//insert data to table 
function insertMembersInfo()
{
  var myRequest;
  var formFname=document.getElementById("fname").value;
  var formLname=document.getElementById("lname").value;
  var formPhone=document.getElementById("phone").value;
  var formJob=document.getElementById("job").value; 
  myRequest=createRequest();
  myRequest.onreadystatechange=function myData()
  {
    var tableInfo=document.getElementById("updateMe");
    if(this.readyState == 4 && this.status == 200)
    { 
      myMemberInfo();
      tableInfo.innerHTML=this.responseText;
    }
    else if(this.readyState>0 && this.readyState<4)
    { 
      tableInfo.innerHTML="<img src='img/spinner.gif' style='width:50px;height:50px;'/>";
    }
    else
    {
      tableInfo.innerHTML="<p>There is something wrong with your request</p>"
    }
  };
  myRequest.open("POST","insert.php",true);
  myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  myRequest.send("&fname="+ formFname +"&lname="+ formLname +"&phone="+ formPhone +"&job="+ formJob);

  return false;
}
//Delete Users from table
function deleteUser(usersId)
{
  var myRequest;
  if(confirm("Are You Sure To Delete ?"+usersId))
  {
    myRequest=createRequest();
    myRequest.onreadystatechange=function myData()
    {
      var tableInfo=document.getElementById("updateMe");
      if(this.readyState == 4 && this.status == 200)
      { 
        myMemberInfo();
        tableInfo.innerHTML=this.responseText;
      }
      else if(this.readyState>0 && this.readyState<4)
      { 
        tableInfo.innerHTML="<img src='img/spinner.gif' style='width:50px;height:50px;'/>";
      }
      else
      {
        tableInfo.innerHTML="<p>There is something wrong with your request</p>"
      }
    };
    myRequest.open("GET","delete.php?usersId="+ usersId,true);
    //myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send();
  }
  return false;
}