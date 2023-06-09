<?php

return [

    'bill_number'           => '账单编号',
    'bill_date'             => '账单日期',
    'bill_amount'           => '账单金额',
    'total_price'           => '总价',
    'due_date'              => '到期日',
    'order_number'          => '订单编号',
    'bill_from'             => '账单来自',

    'quantity'              => '数量',
    'price'                 => '价格',
    'sub_total'             => '小计',
    'discount'              => '折扣',
    'item_discount'         => '行折扣',
    'tax_total'             => '税率',
    'total'                 => '总计',

    'item_name'             => '产品名称 | 产品名称',
    'recurring_bills'       => '重复计费|重复计费',

    'show_discount'         => ':discount% 折扣',
    'add_discount'          => '新增折扣',
    'discount_desc'         => '小计',

    'payment_made'          => '付款完成',
    'payment_due'           => '付款到期日',
    'amount_due'            => '到期金额',
    'paid'                  => '已付款',
    'histories'             => '历史记录',
    'payments'              => '付款方式',
    'add_payment'           => '新增付款方式',
    'mark_paid'             => '标记为已付款',
    'mark_received'         => '标记已收到',
    'mark_cancelled'        => '标记为已取消',
    'download_pdf'          => '下载 PDF格式',
    'send_mail'             => '发送邮件',
    'create_bill'           => '创建帐单',
    'receive_bill'          => '接收账单',
    'make_payment'          => '支付',

    'form_description' => [
        'billing'           => '账单的详细信息出现在您的账单上。账单日期在仪表盘和报告中。 选择您要支付的日期为到期日。',
    ],

    'messages' => [
        'draft'             => '这是 <b>草稿</b> 账单, 在收到后将反映在图表上。',

        'status' => [
            'created'       => '创建日期: date',
            'receive' => [
                'draft'     => '未发送',
                'received'  => '收到日期',
            ],
            'paid' => [
                'await'     => '等待付款',
            ],
        ],
    ],

];
