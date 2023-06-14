<?php

$abi = [
   [
      "inputs" => [],
      "stateMutability" => "nonpayable",
      "type" => "constructor"
   ],
   [
      "anonymous" => false,
      "inputs" => [
         [
            "indexed" => true,
            "internalType" => "uint256",
            "name" => "id",
            "type" => "uint256"
         ],
         [
            "indexed" => true,
            "internalType" => "string",
            "name" => "name",
            "type" => "string"
         ],
         [
            "indexed" => true,
            "internalType" => "string",
            "name" => "serviceName",
            "type" => "string"
         ]
      ],
      "name" => "EventCreation",
      "type" => "event"
   ],
   [
      "anonymous" => false,
      "inputs" => [
         [
            "indexed" => true,
            "internalType" => "address",
            "name" => "account",
            "type" => "address"
         ],
         [
            "indexed" => true,
            "internalType" => "uint256",
            "name" => "amount",
            "type" => "uint256"
         ]
      ],
      "name" => "PointsGained",
      "type" => "event"
   ],
   [
      "anonymous" => false,
      "inputs" => [
         [
            "indexed" => true,
            "internalType" => "address",
            "name" => "account",
            "type" => "address"
         ],
         [
            "indexed" => true,
            "internalType" => "string",
            "name" => "serviceName",
            "type" => "string"
         ],
         [
            "indexed" => true,
            "internalType" => "uint256",
            "name" => "_productPrice",
            "type" => "uint256"
         ],
         [
            "indexed" => false,
            "internalType" => "uint256",
            "name" => "_totalPoints_before",
            "type" => "uint256"
         ]
      ],
      "name" => "PointsRedeemed",
      "type" => "event"
   ],
   [
      "anonymous" => false,
      "inputs" => [
         [
            "indexed" => true,
            "internalType" => "uint256",
            "name" => "id",
            "type" => "uint256"
         ],
         [
            "indexed" => true,
            "internalType" => "string",
            "name" => "name",
            "type" => "string"
         ]
      ],
      "name" => "ServiceCreation",
      "type" => "event"
   ],
   [
      "anonymous" => false,
      "inputs" => [
         [
            "indexed" => true,
            "internalType" => "uint256",
            "name" => "id",
            "type" => "uint256"
         ],
         [
            "indexed" => true,
            "internalType" => "address",
            "name" => "account",
            "type" => "address"
         ],
         [
            "indexed" => true,
            "internalType" => "string",
            "name" => "name",
            "type" => "string"
         ]
      ],
      "name" => "UserCreation",
      "type" => "event"
   ],
   [
      "inputs" => [
         [
            "internalType" => "string",
            "name" => "_serviceName",
            "type" => "string"
         ],
         [
            "internalType" => "string",
            "name" => "_eventName",
            "type" => "string"
         ]
      ],
      "name" => "addPoints",
      "outputs" => [
         [
            "internalType" => "bool",
            "name" => "",
            "type" => "bool"
         ]
      ],
      "stateMutability" => "nonpayable",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "string",
            "name" => "_serviceName",
            "type" => "string"
         ],
         [
            "internalType" => "string",
            "name" => "_eventName",
            "type" => "string"
         ],
         [
            "internalType" => "address",
            "name" => "_to",
            "type" => "address"
         ],
         [
            "internalType" => "uint256",
            "name" => "_reward",
            "type" => "uint256"
         ]
      ],
      "name" => "addPointsTo",
      "outputs" => [
         [
            "internalType" => "bool",
            "name" => "",
            "type" => "bool"
         ]
      ],
      "stateMutability" => "nonpayable",
      "type" => "function"
   ],
   [
      "inputs" => [],
      "name" => "baseReward",
      "outputs" => [
         [
            "internalType" => "uint256",
            "name" => "",
            "type" => "uint256"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [],
      "name" => "contractAddress",
      "outputs" => [
         [
            "internalType" => "address",
            "name" => "",
            "type" => "address"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "string",
            "name" => "_eventName",
            "type" => "string"
         ],
         [
            "internalType" => "string",
            "name" => "_serviceName",
            "type" => "string"
         ],
         [
            "internalType" => "uint64",
            "name" => "_multiplier",
            "type" => "uint64"
         ]
      ],
      "name" => "createEvent",
      "outputs" => [
         [
            "internalType" => "bool",
            "name" => "",
            "type" => "bool"
         ]
      ],
      "stateMutability" => "nonpayable",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "string",
            "name" => "_eventName",
            "type" => "string"
         ],
         [
            "internalType" => "string",
            "name" => "_serviceName",
            "type" => "string"
         ],
         [
            "internalType" => "uint64",
            "name" => "_multiplier",
            "type" => "uint64"
         ]
      ],
      "name" => "createEventInternal",
      "outputs" => [
         [
            "internalType" => "bool",
            "name" => "",
            "type" => "bool"
         ]
      ],
      "stateMutability" => "nonpayable",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "string",
            "name" => "_serviceName",
            "type" => "string"
         ]
      ],
      "name" => "createService",
      "outputs" => [
         [
            "internalType" => "bool",
            "name" => "",
            "type" => "bool"
         ]
      ],
      "stateMutability" => "nonpayable",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "string",
            "name" => "_name",
            "type" => "string"
         ]
      ],
      "name" => "createUser",
      "outputs" => [
         [
            "internalType" => "bool",
            "name" => "",
            "type" => "bool"
         ]
      ],
      "stateMutability" => "nonpayable",
      "type" => "function"
   ],
   [
      "inputs" => [],
      "name" => "numServices",
      "outputs" => [
         [
            "internalType" => "uint256",
            "name" => "",
            "type" => "uint256"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [],
      "name" => "numUsers",
      "outputs" => [
         [
            "internalType" => "uint256",
            "name" => "",
            "type" => "uint256"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "uint256",
            "name" => "_multiplier",
            "type" => "uint256"
         ]
      ],
      "name" => "pointsCalc",
      "outputs" => [
         [
            "internalType" => "uint256",
            "name" => "",
            "type" => "uint256"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "uint256",
            "name" => "_productPrice",
            "type" => "uint256"
         ],
         [
            "internalType" => "string",
            "name" => "_serviceName",
            "type" => "string"
         ]
      ],
      "name" => "redeemer",
      "outputs" => [
         [
            "internalType" => "bool",
            "name" => "",
            "type" => "bool"
         ]
      ],
      "stateMutability" => "nonpayable",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "string",
            "name" => "",
            "type" => "string"
         ]
      ],
      "name" => "services",
      "outputs" => [
         [
            "internalType" => "uint256",
            "name" => "id",
            "type" => "uint256"
         ],
         [
            "internalType" => "string",
            "name" => "name",
            "type" => "string"
         ],
         [
            "internalType" => "uint256",
            "name" => "totalEvents",
            "type" => "uint256"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "uint256",
            "name" => "_initValue",
            "type" => "uint256"
         ]
      ],
      "name" => "setBaseReward",
      "outputs" => [
         [
            "internalType" => "bool",
            "name" => "",
            "type" => "bool"
         ]
      ],
      "stateMutability" => "nonpayable",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "address",
            "name" => "",
            "type" => "address"
         ]
      ],
      "name" => "users",
      "outputs" => [
         [
            "internalType" => "uint256",
            "name" => "id",
            "type" => "uint256"
         ],
         [
            "internalType" => "uint256",
            "name" => "totalPoints",
            "type" => "uint256"
         ],
         [
            "internalType" => "address",
            "name" => "wallet",
            "type" => "address"
         ],
         [
            "internalType" => "string",
            "name" => "name",
            "type" => "string"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "string",
            "name" => "_serviceName",
            "type" => "string"
         ],
         [
            "internalType" => "string",
            "name" => "_eventName",
            "type" => "string"
         ]
      ],
      "name" => "viewEvent",
      "outputs" => [
         [
            "components" => [
               [
                  "internalType" => "uint256",
                  "name" => "id",
                  "type" => "uint256"
               ],
               [
                  "internalType" => "uint256",
                  "name" => "totalPoints",
                  "type" => "uint256"
               ],
               [
                  "internalType" => "string",
                  "name" => "name",
                  "type" => "string"
               ],
               [
                  "internalType" => "uint64",
                  "name" => "rewardMulti",
                  "type" => "uint64"
               ]
            ],
            "internalType" => "struct RewardingTool.ServiceEvent",
            "name" => "",
            "type" => "tuple"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [
         [
            "internalType" => "address",
            "name" => "_userAddr",
            "type" => "address"
         ]
      ],
      "name" => "viewUserPoints",
      "outputs" => [
         [
            "internalType" => "uint256",
            "name" => "",
            "type" => "uint256"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ],
   [
      "inputs" => [],
      "name" => "viewYourPoints",
      "outputs" => [
         [
            "internalType" => "uint256",
            "name" => "",
            "type" => "uint256"
         ]
      ],
      "stateMutability" => "view",
      "type" => "function"
   ]
];
