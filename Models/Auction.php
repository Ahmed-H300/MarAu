<?php

class Auction {
    public int $AuctionId;    
    public string $StartDate;
    public string $EndDate;
    public int $Status;
    
    public int $GameId;
    public string $GameName;


    public int $HighestBidId;
    public int $HighestBidBuyerId;
    public int $HighestBidAmount;
    public string $HighestBidBuyerUserName;
    public string $HighestBidDate;
}