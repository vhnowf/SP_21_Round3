@extends('layouts.app')

@section('question-content')

<div class="text">Các câu hỏi thường gặp </div>
    <div class="question_content">
        <ul>
            <li>
                <a href="{{route("question.first") }}">
                    [Thành viên mới] Cách theo dõi Tình Trạng Vận Chuyển Của Đơn Hàng
                </a>
            </li>
            <li>
                <a  href="{{ route("question.first") }}" >
                    [Người bán] Làm thế nào để bắt đầu bán hàng trên website?
                </a>
            </li>
            <li>
                <a  href="{{ route("question.first") }}">
                    [Tài khoản] Tại sao tài khoản của tôi bị khóa/bị giới hạn?
                </a>
            </li>
            <li>
                <a href="{{route("question.first") }}">
                    [Thông tin vận chuyển] Làm sao để liên hệ Đơn vị vận chuyển/tra cứu thông tin vận chuyển/hối giao hàng?
                </a>
            </li>
             <li>
                <a href="{{route("question.first") }}">
                    [Covid] Cẩm Nang Mua Sắm
                </a>
            </li>
            <li>
                <a href="{{route("question.first") }}">
                    [Tài khoản] Tại sao tôi không nhận được Mã xác minh (OTP)?
                </a>
            </li>
            <li>
                <a href="{{route("question.first") }}">
                    [Đơn hàng] Tôi có thể hủy đơn hàng không?
                </a>
            </li>
            <li>
                <a href="{{route("question.first") }}">
                    [Thành viên mới] Cách theo dõi Tình Trạng Vận Chuyển Của Đơn Hàng
                </a>
            </li>
            <li>
                <a href="{{route("question.first") }}">
                    [Thành viên mới] Quy trình trả hàng hoàn tiền 
                </a>
            </li>
        </ul>
    </div>
</div>

@endsection