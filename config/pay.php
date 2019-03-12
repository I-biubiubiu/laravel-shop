<?php

return [
    'alipay' => [
        'app_id'         => '2016092700611913',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqzTYh0+k1AZyIxHRYJzOilXCjht3u4GTUZbsQB0+VUyE2CBnLhLWFDGTePn4xaXaj34rENKxeFNvTLWmwoWKqGuZXrqz4a1CuL/plBhYLXp6LIpFJnzdgl62jTuSTKbn5peuH0HETKAqnLhxCVXzxWNnw8cGyJoBnUchEtdpho/W7jX++Dd8WgX/u2986KILUgWiV+IeT6UJXM3MVZzMGMuDroy4DwnmeaTF/t/TUrsrYZ0NKQstZGH8j30WrHY27ZjBHcdQkDKTZbR4rZsQ3kRvHG8g4vX2/ICLUMkMFvfF/nmQQp2Z88g6BlfP0K4z1bJDz6Z0EKPGj29tyk3v4QIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAqTM7aQhQaegpBUk/jT/zEPLOYeGfWfFHYxprehS8/OUUzljEghgz5km2hGoj1FekHYb5PSp1ELjWslDVAOm0F2EzXIeIKRbvNK1HnkvXOY0uF578IQW3iCNfzJrwTqto0CR+ZGGr3I3n3qVz5iNbkQ3wXn6veZHpbCwztr3C+E8794TF5kaGkWncONhzPbAcqRR/ZDngcKzNF8xrNqWeFdKcPqT7W4xZ8q+LyGbxkAHqOhvHHFvw3vIWLMvQXi1WNnRRgVaDdsyFt+pQGKBvQYZNGn4/ZKNmm/+hKS2JWuHELQOlXfAlqtfeU6CVQh6kUoRMYGH2cvKQVw7Mfg2PVwIDAQABAoIBAQCRRxL40RGyjYtDJaxyjHkYkVJRStd286s21YV40fufLNbbge5gQYW2co5LTZMsDIA2diDkuuK/E+YMP0lUulVOScA+74Qiu7VxxmKa8UV//c+YqoKTnAQE2VK1LEevVI/vP5ZifFaDTjjLu8Yy0SMa/hvoFuB2Aqmonp9chby1VHVNMGanklwL0G8ftRPKScyZFjXFz3NGI8JchVIq+OySrKzaqwZKew+duhlxdURZX89sjBzO7/Y8gTC7uuYwGJiezPEwTE2pRMKKVjrzCsZhPe4RAacFO3FrU1rMLmh+ANVMNE2z03M3pYNar7e2Fx+bpbOrPo+do9xiLc44JmthAoGBANlZbq71A/RxinqVSWLkKQf5x3Y2QuJeaQmhk3pQ8U2Hd4pv6FTdA5XNmn7BcMBZLrL8Td1PkOE+l+R1UhrTeSL3IpM51NomzJDpUVqhXpHhMSKRoBUm0Me0cizY8AKqzOJGcWafvm4SC8uLPkDe0CqZbwix4igUy8WYXAyZptRxAoGBAMdJ3Ub609ACZjjDBGHBV7L9v1Atdp8N3qxc+Fc8KAtxd0Fca3myzi5BnhCVEYanXPfnIrZ0f870UHiVUMhy/kw58s0376hCTLSrQRAZ9rczvOjYkNMqkB52RMbkViBUJm2alrsyMvDWTnNPsBdH9MtV//+9ryOLpxADm3o+1ORHAoGAGYX3CXScUkhDCsIdLA+/AcDDO46DrDGKBCeFOgfnTkNqNkeN8OlDUoQicGAm7W+LnFkki6icStce3yUnzx6mSwTaeo9//14vB5VeiFYK1Pas3nJbaiB0w/7cqYeQJ8AG70t2Zaa8phBYcj6XwOZpa5c5Arxg4nQOudV6ecBRZwECgYBW9Zc1oruMN4/NUuN1mH0hIHI7lSr+qnmwsny27Av5OlC0V5SaLPik3IMRb0qPfDYoAlZ2UQ14C8mVZGo0nWDzeBHHlJHh1NRNvbCNSxcJx+y1mdJQInFyqV7HftlKEA4Yo20EUBpEVu8yh+Iptn9NvsAPIwDqPMTwSvKr/AC/fwKBgQDYdstihAAa/jSz8rZkFk6XxQiZOTOXA0D3WfMfNP02KFTdfnecuCB45rbN8URLs7xKnEl1VvGZVBeN1WOp17OXq16iWcfsZ7Zx1ste/ZSbnFSfPzuNX3b/EjuxBkb4X1sSnkqXflIn50wASwDiySxSmaqmD859yLZc5Cj6WTfILA==',
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