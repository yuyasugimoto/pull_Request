@include('main')

@section('contents')
<div id="contents">
    <table id="ipv4_table">
        <tr>
            <td>ID</td>
            <td>IPv4</td>
            <td>Memo</td>
            <td>TimeStamps</td>
            <td>Delete</td>
            <td>Apply</td>
        </tr>
        <tr>
            <td class="value number">1</td>
            <td class="value ipv4">0.0.0.0</td>
            <td class="value">ALL REQUEST</td>
            <td class="value">2019-06-25</td>
            <td class="value apply"><img src="{{ asset('img/check.png') }}" alt=""></td>
            <td class="value apply"><img src="{{ asset('img/check.png') }}" alt=""></td>
        </tr>
        <tr>
            <td class="value number">*</td>
            <td class="value ipv4"><input type="text" name="ip" placeholder="ip address"></td>
            <td class="value"><input type="text" name="memo"></td>
            <td class="value">2019-06-25</td>
            <td class="value apply"></td>
            <td class="value add"><img src="{{ asset('img/check.png') }}" alt=""></td>
        </tr>
    </table>
</div>
@show