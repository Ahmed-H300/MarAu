<?php

class Game 
{
    public int $GameId;
    public string $Name;
    public string $Description;
    // Icon ,Image and Video are stored With the GameId
    public string $ReleaseDate;
    public float $Price;
    public string $Type;
    public string $Version;
    public float $Sale;

    public ?int $RatingCount;
    public ?float $Rating;

    public ?int $SellerId; 
    public ?string $SellerName;

    public ?int $FirstOwner;
    public ?string $FirstOwnerName;

    public ?string $OperatingSystem;
    public ?string $MinimumCPU;
    public ?string $RecommendedCPU;
    public ?string $MinimumGPU;
    public ?string $RecommendedGPU;
    public ?string $MinimumRAM;
    public ?string $RecommendedRAM;
    public ?string $Storage;

    public int $NumberOfOrders;
    public ?string $LastOrderDate;

}