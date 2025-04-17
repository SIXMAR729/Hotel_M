<?php

function setStatus($string) {
    if ($string === "True" || $string === true) {
        return '<span class="text-green-500">ห้องว่าง</span>';
    } else {
        return '<span class="text-red-500">ห้องไม่ว่าง</span>';
    }
}

function formatDate($datetime, $includeYear = false) {
    $months = [
        "01" => "มกราคม",
        "02" => "กุมภาพันธ์",
        "03" => "มีนาคม",
        "04" => "เมษายน",
        "05" => "พฤษภาคม",
        "06" => "มิถุนายน",
        "07" => "กรกฏาคม",
        "08" => "สิงหาคม",
        "09" => "กันยายน",
        "10" => "ตุลาคม",
        "11" => "พฤศจิกายน",
        "12" => "ธันวาคม",
    ];

    if ($datetime instanceof DateTime) {
        $day = $datetime->format("d");
        $month = $datetime->format("m");
        $year = $datetime->format("Y");
        return $includeYear
            ? "$day {$months[$month]} $year"
            : "$day {$months[$month]}";
    } else {
        return "Invalid date";
    }
}

function setStatusPayment($string) {
    switch ($string) {
        case "NOPAYMENT":
            return '<span class="text-red-500">ยังไม่ได้ชำระเงิน</span>';
        case "WAITINGPAYMENT":
            return '<span class="text-yellow-400">รอการยืนยันชำระเงิน</span>';
        case "SUCCESSPAYMENT":
            return '<span class="text-green-500">ชำระเงินสำเร็จ</span>';
        case "FAILEDPAYMENT":
            return '<span class="text-red-500">ชำระเงินไม่สำเร็จ</span>';
        case "TIMEOUTPAYMENT":
            return '<span class="text-red-500">หมดเวลาการจองห้องพัก</span>';
        default:
            return '<span class="text-yellow-400">เกิดข้อผิดพลาด</span>';
    }
}

function setStatusPaymentText($string) {
    switch ($string) {
        case "NOPAYMENT":
            return "ยังไม่ได้ชำระเงิน";
        case "WAITINGPAYMENT":
            return "รอการยืนยันชำระเงิน";
        case "SUCCESSPAYMENT":
            return "ชำระเงินสำเร็จ";
        case "FAILEDPAYMENT":
            return "ชำระเงินไม่สำเร็จ";
        case "TIMEOUTPAYMENT":
            return "หมดเวลาการจองห้องพัก";
        default:
            return "เกิดข้อผิดพลาด";
    }
}

function formatGender($gender) {
    return $gender === "male" ? "ชาย" : "หญิง";
}
