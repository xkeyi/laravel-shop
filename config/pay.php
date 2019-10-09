<?php

return [
    'alipay' => [
        'app_id'         => '2016091700534630',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4c+LRf1IRsgXa6DePHLU6Q1zf3Jrbxeme5w2hvjVvJu9x+dU8TbjfdvmIZY6/rBZMZ8zwK6LiKQcKU8Vl3CogbklZB4XKNgd8eyaDksoouZNuFjg+x6Slt5EsX6YhRUb0dh9ALPeXNY6ZoVXCQZPP6hChsW6fV/gqE3WYRoiYUB35kKC7KZstkgyYyPu5VZSJgcETUEA2MAKHjZdbnUL1b5znAORKqRCxrOadJqFPTFlcnJLD/rJjar0c5fN2f4fXNT7gaC6WK4C3pRDCZEMBqPDd5LQtz7Hr+HUgnRnb3t5FKG6F1dLj3NHYw1jE50QFNizAqGgr+THXNgDX6GXyQIDAQAB',
        'private_key'    => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCBetPOaTK/bSqaMn3SA9xbdEVqn4s973E4wDzhRnm9peoIfWpg5KBNFYdWlXn3KQWCWLo3IK9BvoxNvlBQzmXB0iPFLsQCrtwmuPaWrguD69g91+ME73P/Rt3kmEAlTiAKilOf0qs4tG1AJy9c2jxohBJYos90w5PuTX6KVzkdhle8BLrgvkr46A2Qn3whwWXPWsAZel1I2dkT+CPAcGz4uRszN2Ta7Qyj6rouDbCm10kb/XoZAEBtTGkPUR1EXWfmB/V6fksJoKbzCOd3TjOZaVlFd52v+efNFUFPTWvqPt5yabqzgeBx3aMkHEVxMDFzJNeHEcW5eOSndUOVbUb/AgMBAAECggEAVAeGlhqnmJwcXd4O0dE3nRKkSkIod5WBgTchS4IVWALpE4FxHFjDv8MNBiAT+1df/+vdThGkK6KiI4IzVX3dhCAAnuNuyd75eRfo0Hk7d+4DdH87EeTk/vLa5pP4bT16hdyn0L1D6ZUOoefMURJAygOMdIGU6U5UHv+j89wPcRzmO3//4WQdspNvcBHnnRXZ4tVDR8CFkCF5UUdUEV8iHy/L9uM7xNQGPV2+n1WwBCE6eey/D63wMIxbPzk5nl49JDfEd11TOd+iaccfTkNpd4TUjuZu78mVuhZJSe/qgRjfCGk/bLT5TDnpzGHnWOIhbfsn2puAMi751m5TMX6uIQKBgQC8EM8gVk+EP7H+Izs858Xg6x/8LVEj++r2fW5ZmsUn2bgToGA12Mpv5f7P49C5z/HSSPwNXYDOvSEkaM9wtPNVB7D+94k3kpEuPmgWZxVYMj33vjN3UCmdOrpGC6v2w/AbUYI+Aa7NwWQZemE+ve4LEkCsihvuTw5hgtbWl2NO8wKBgQCwQFjCIyu66PibMQA8uooacow/9LWOC0ihtfQZ4fK03i4OihsWBGAhzS+RnJN/SozGz01zZh5MWvwg7JbCcp7NlkyChMa8/SupquqUNwpR3QHyGzgf+xOZQQbQyvRfZyXnjDu63wNC1YhO513tCuLX3bKbxgXVyt6VHoz8JjXixQKBgQClvjKtDyQZK4GUtjwY2zMbnFyeBNpD2lsjTTwZoDstecWvFmJ0UlFm+M3vLZngiJFYgJYSuVsx2KEC05QugmsJfzPQIRw/a96jYMCfLc4z4mOWmXwGJRHnzcAox1SQr/JGQTmFqDoEf/HWOnLFtuG5xCZXaYhgKDBGY+cvTFBrXQKBgCvhGTfcAbsa3Snl3SVBW7iR5BDYH4spi/+WiRsYgZA98EF2aJ/mnvhLWRhrXt1F9h5Y5fNg7RIdZL/dpvrqBlcwoAOugrvyW7h18MjNmygeWamo1SRBIfP5mHTK0mQeDfXDl+tCMlGlT7Y1K9Ej8K3FZ/4YIsPDKf7+CCOOb8PxAoGANBoNDjxkVodb8WPALaiSg6OPdYQxM0fghFy5cGAC/KIp/P3WJ/Pqc37+Bdir+p00OxUTogFgBLxw9zG4y4kZIr/Ns2nVl+cF74nVh/ajufBdzgOw7vsR4gij8ucu19zrPsduvEdDPJwUcIVxFUwTJfMKqPPMJpU9c7Z7I7iXtfw=',

        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
