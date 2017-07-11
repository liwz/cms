var $ = function(objId){
 	if(!objId){return null; }
	if(document.getElementById){
		return eval('document.getElementById("' + objId + '")');
	}else if(document.layers){
		return eval("document.layers['" + objId +"']");
	}else{
		return eval('document.all.' + objId);
	}
 }

var DaysInMonth = new Array(31, 28, 31, 30, 31, 30, 31, 31,30, 31, 30, 31);
var ArrMonth = new Array("1", "2", "3","4", "5", "6", "7","8", "9","10","11", "12");
//var ArrMonthName = new Array("Jan", "Feb", "Mar","Apr", "May", "Jun", "Jul","Aug", "Sep","Oct","Nov", "Dec");
var ArrMonthName = new Array("01", "02", "03","04", "05", "06", "07","08", "09","10","11", "12");

var now = new Date();
var nowYear = now.getFullYear();
var nowMonth = now.getMonth()+1;
var nowDay = now.getDate();
var nowDate = nowYear + "-" + ((nowMonth < 10) ? ("0" + nowMonth) : nowMonth) + "-" + ((nowDay < 10) ? ("0" + nowDay) : nowDay);
var strCal = "";

/**
 * �������·�������
 */
function GetDaysInMonth(year,month){
	if (month == 2){
		return (((year % 4 == 0) && ((year % 100) != 0)) ||(year % 400 == 0)) ? 29 : 28;
	}else{
		return DaysInMonth[month-1];
	}
}
/**
 * ������select����
 */
function InitCalYear(){
	var ii = 0;
	var StarYear = nowYear + afterYear;
	var EndYear = nowYear - beforeYear;
  StarYear = 2020;
  EndYear = 2006;
	for(var i = StarYear;i >= EndYear;i--){
		$("CalYear").options[ii] = new Option(i,i);
		if ($("CalYear").options[ii].value == nowYear){
			$("CalYear").options[ii].selected = true;
		}
		ii++;
	}
}
/**
 * ����·�select����
 */
function InitCalMonth(){
	for(var i = 0;i < 12;i++){
		$("CalMonth").options[i] = new Option(ArrMonthName[i],ArrMonth[i]);
		if ($("CalMonth").options[i].value == nowMonth){
			$("CalMonth").options[i].selected = true;
		}
	}
}

var oldclassname = new String();
function ButtonOver(id){
	//oldclassname = $(id).className;
	//$(id).className = "DayOver";
}

function ButtonOut(id){
	//$(id).className = oldclassname;
}

/**
 * ������ݴ�������
 */
function ChgYear(id){
	var Year = id.options[id.selectedIndex].value;
	var MonthIndex = $("CalMonth").selectedIndex;
	var Month = $("CalMonth").options[MonthIndex].value;
	InitCalendar(Year,Month);
}

function ChgMonth(id){
	var Month = id.options[id.selectedIndex].value;
	var YearIndex = $("CalYear").selectedIndex;
	var Year = $("CalYear").options[YearIndex].value;
	InitCalendar(Year,Month);
}

/**
 * �������¸�����������
 */
function InitCalendar(Year,Month){
	if (!Year && !Month){
		Year = nowYear;
		Month = nowMonth;
	}

	var DayInMonth = GetDaysInMonth(Year,Month);
	var ThisMonthWeek = new Date(Year,parseInt(Month)-1,1);
	var Week = ThisMonthWeek.getDay();

	strCal = "<table width='100%' border=\"0\" cellpadding=\"0\" cellspacing=\"1\">\n";
	strCal += "<tr>";
	strCal += "<th>��</th>";
	strCal += "<th>һ</th>";
	strCal += "<th>��</th>";
	strCal += "<th>��</th>";
	strCal += "<th>��</th>";
	strCal += "<th>��</th>";
	strCal += "<th>��</th>";
	strCal += "</tr>\n";
	strCal += "<tr>\n";
	for(var i=0;i<Week;i++){
		strCal += "<td >&nbsp;</td>\n";
	}
	
	var intWeek = i;
	for(var j=1;j<=DayInMonth;j++){
		var strDate = Year + "-" + ((Month < 10) ? ("0" + Month) : Month) + "-" + ((j < 10) ? ("0" + j) : j);
		if (strDate == nowDate){
			//var ClassName = "DayNow";
			strCal += "<td id=\"day_" + intWeek + "_" + j + "\" onMouseover=\"javascript:ButtonOver(this.id);\" onMouseOut=\"javascript:ButtonOut(this.id);\" onClick=\"javascript:doClick(" + Year + "," + Month + "," + j + ");\" style=\"cursor:hand;\" class=\"bg01\">" + j + "</td>\n";
		//}else if(ArticleInDay.indexOf(strDate) > -1){
			//var ClassName = "ArticleInDay";
		//	var ClassName = "DayNow";
		//}else if (intWeek == 0){
		//	var ClassName = "DaySun";
		//}else if (intWeek == 6){
		//	var ClassName = "DaySat";
		}else{
			//var ClassName = "Day";
			strCal += "<td id=\"day_" + intWeek + "_" + j + "\" onMouseover=\"javascript:ButtonOver(this.id);\" onMouseOut=\"javascript:ButtonOut(this.id);\" onClick=\"javascript:doClick(" + Year + "," + Month + "," + j + ");\" style=\"cursor:hand;\">" + j + "</td>\n";
		}
		if (intWeek == 6){
			intWeek = 0;
			strCal += "</tr>\n";
			strCal += "<tr>\n";
		}else{
			intWeek++;
		}
	}

	for(k=intWeek;k<=6;k++){
		strCal += "<td>&nbsp;</td>\n";
	}

	strCal += "</tr>\n";
	strCal += "</table>\n";

	$("CalBody").innerHTML = strCal;
}
<!--//--><![CDATA[//><!--
var $=function(objId){if(!objId){return null}
if(document.getElementById){return eval('document.getElementById("'+objId+'")')}else if(document.layers){return eval("document.layers['"+objId+"']")}else{return eval('document.all.'+objId)}}

// �Ƶ�����
var beforeYear 	= 0;		//������ʾ�Ĺ�ȥ������
var afterYear 	= 0;		//������ʾ��δ��������
//��������ִ�к���
function doClick(Year,Month,Day){
	var tmpMonth = (Month < 10) ? ("0" + Month) : Month;
	var tmpDay = (Day < 10) ? ("0" + Day) : Day;
	window.open("/yuce/hdjr.asp?y="+Year+"&m="+tmpMonth+"&d="+tmpDay+"");
}


//--><!]]>

