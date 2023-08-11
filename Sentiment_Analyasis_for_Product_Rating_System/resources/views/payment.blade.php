<form action="{{ url('charge') }}" method="post">
    <input type="text" name="amount"   style="height:50px;width:370px;font-size:24px;"/>
    {{ csrf_field() }}
    <input type="submit" name="submit" value="Pay Now" style="height:50px;width:170px;font-size:24px;">
</form>

