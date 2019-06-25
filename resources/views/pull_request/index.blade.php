@include('main')

@section('contents')
<form class="clearfix contents" action="" method="POST">
    <div class="floatbox">
        Assign user
        <select name="user-name">
            @foreach ($assign as $human)
                <option value="{{ $human->staff_name }}">{{ $human->staff_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="floatbox">
        <input type="submit" value="search" id="apply-button">
    </div>
</form>
<div class="contents">
    <table id="assign_table">
        <tr>
            <td>Request Number</td>
            <td>Created at</td>
            <td>Created User Name</td>
            <td>Assign User</td>
            <td>Assign Day</td>
            <td>Apply</td>
        </tr>
        @foreach($pullObj as $value)
        <tr>
            <td class="value">
                <span class="number">{{ $value->request_num }}</span>
            </td>
            <td class="value">
                <span class="created-at">{{ $value->created_at_request }}</span>
            </td>
            <td class="value">
                <span class="users">{{ $value->request_urr }}</span>
            </td>
            <td class="value">
                <span class="assing-usre">
                    <select name="assign">
                        @foreach ($assign as $human)
                        @if ($human->staff_name == $value->assing_user)
                            <option value="{{ $human->staff_name }}" selected>{{ $human->staff_name }}</option>
                        @else
                            <option value="{{ $human->staff_name }}">{{ $human->staff_name }}</option>
                        @endif
                        @endforeach
                    </select>
                </span>
            </td>
            <td class="value">
                <span class="assign-day">
                    <select name="year">
                        @for ($i = 2019;$i <= 2030;$i++)
                            @if (date("Y", strtotime($value->review_day)) == $i)
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                        @endfor
                    </select>
                    <select name="month">
                        @for ($i = 1;$i <= 12;$i++)
                            @if (date("m", strtotime($value->review_day)) == $i)
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                        @endfor
                    </select>
                    <select name="day">
                        @for ($i = 1;$i <= 31;$i++)
                            @if (date("d", strtotime($value->review_day)) == $i)
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                        @endfor
                    </select>
                </span>
            </td>
            <td class="value">
                <div class="apply"><img src="{{ asset('img/check.png') }}" alt=""></div>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@show