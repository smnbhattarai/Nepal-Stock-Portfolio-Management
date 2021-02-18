<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [
            [
                "securitySymbol" => "NICA",
                "securityName" => "NIC Asia Bank Ltd.",
            ],
            [
                "securitySymbol" => "NIFRA",
                "securityName" => "Nepal Infrastructure Bank Limited",
            ],
            [
                "securitySymbol" => "CBL",
                "securityName" => "Civil Bank Ltd",
            ],
            [
                "securitySymbol" => "GBIME",
                "securityName" => "Global IME Bank Limited",
            ],
            [
                "securitySymbol" => "NABIL",
                "securityName" => "Nabil Bank Limited",
            ],
            [
                "securitySymbol" => "NTC",
                "securityName" => "Nepal Doorsanchar Comapany Limited",
            ],
            [
                "securitySymbol" => "EBL",
                "securityName" => "Everest Bank Limited",
            ],
            [
                "securitySymbol" => "NBL",
                "securityName" => "Nepal Bank Limited",
            ],
            [
                "securitySymbol" => "NLIC",
                "securityName" => "Nepal Life Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "MEGA",
                "securityName" => "Mega  Bank Nepal Ltd.",
            ],
            [
                "securitySymbol" => "KBL",
                "securityName" => "Kumari Bank Limited",
            ],
            [
                "securitySymbol" => "NIL",
                "securityName" => "Neco Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "MBL",
                "securityName" => "Machhapuchhre Bank Limited",
            ],
            [
                "securitySymbol" => "CCBL",
                "securityName" => "Century Commercial Bank Ltd.",
            ],
            [
                "securitySymbol" => "NIB",
                "securityName" => "Nepal Investment Bank Limited",
            ],
            [
                "securitySymbol" => "NCCB",
                "securityName" => "Nepal Credit And Commercial Bank Limited",
            ],
            [
                "securitySymbol" => "NRIC",
                "securityName" => "Nepal Reinsurance Company Limited",
            ],
            [
                "securitySymbol" => "SRBL",
                "securityName" => "Sunrise Bank Limited",
            ],
            [
                "securitySymbol" => "PRVU",
                "securityName" => "Prabhu  Bank Limited",
            ],
            [
                "securitySymbol" => "SBL",
                "securityName" => "Siddhartha Bank Limited",
            ],
            [
                "securitySymbol" => "NMB",
                "securityName" => "NMB Bank Limited",
            ],
            [
                "securitySymbol" => "ALICL",
                "securityName" => "Asian Life Insurance Co. Limited",
            ],
            [
                "securitySymbol" => "LICN",
                "securityName" => "Life Insurance Co. Nepal",
            ],
            [
                "securitySymbol" => "BOKL",
                "securityName" => "Bank of Kathmandu Ltd.",
            ],
            [
                "securitySymbol" => "PCBL",
                "securityName" => "Prime Commercial Bank Ltd.",
            ],
            [
                "securitySymbol" => "UPPER",
                "securityName" => "Upper Tamakoshi Hydropower Ltd",
            ],
            [
                "securitySymbol" => "NBB",
                "securityName" => "Nepal Bangladesh Bank Limited",
            ],
            [
                "securitySymbol" => "SANIMA",
                "securityName" => "Sanima Bank Limited",
            ],
            [
                "securitySymbol" => "PICL",
                "securityName" => "Prudential Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "NLBBL",
                "securityName" => "Nerude Laghubita Bikas Bank Limited",
            ],
            [
                "securitySymbol" => "SHIVM",
                "securityName" => "SHIVAM CEMENTS LTD",
            ],
            [
                "securitySymbol" => "CIT",
                "securityName" => "Citizen Investment Trust",
            ],
            [
                "securitySymbol" => "HDL",
                "securityName" => "Himalayan Distillery Limited",
            ],
            [
                "securitySymbol" => "SICL",
                "securityName" => "Shikhar Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "CBBL",
                "securityName" => "Chhimek Laghubitta Bikas Bank Limited",
            ],
            [
                "securitySymbol" => "AHPC",
                "securityName" => "Arun Valley Hydropower Development Co. Ltd.",
            ],
            [
                "securitySymbol" => "CZBIL",
                "securityName" => "Citizen Bank International Limited",
            ],
            [
                "securitySymbol" => "NUBL",
                "securityName" => "Nirdhan Utthan Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "DDBL",
                "securityName" => "Deprosc Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "GBBL",
                "securityName" => "Garima Bikas Bank Limited",
            ],
            [
                "securitySymbol" => "LBL",
                "securityName" => "Laxmi Bank Limited",
            ],
            [
                "securitySymbol" => "NLICL",
                "securityName" => "National Life Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "IGI",
                "securityName" => "IME General Insurance Ltd.",
            ],
            [
                "securitySymbol" => "LBBL",
                "securityName" => "Lumbini Bikas Bank Ltd.",
            ],
            [
                "securitySymbol" => "MMFDB",
                "securityName" => "Mirmire Microfinance Development Bank Ltd.",
            ],
            [
                "securitySymbol" => "SFCL",
                "securityName" => "Samriddhi Finance Company Limited",
            ],
            [
                "securitySymbol" => "ADBL",
                "securityName" => "Agriculture Development Bank Limited",
            ],
            [
                "securitySymbol" => "SIC",
                "securityName" => "Sagarmatha Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "JBBL",
                "securityName" => "Jyoti Bikas Bank Limited",
            ],
            [
                "securitySymbol" => "SBI",
                "securityName" => "Nepal SBI Bank Limited",
            ],
            [
                "securitySymbol" => "SCB",
                "securityName" => "Standard Chartered Bank Limited",
            ],
            [
                "securitySymbol" => "GBLBS",
                "securityName" => "Grameen Bikas Laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "LGIL",
                "securityName" => "Lumbini General Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "AKPL",
                "securityName" => "Arun Kabeli Power Ltd.",
            ],
            [
                "securitySymbol" => "PRIN",
                "securityName" => "Prabhu Insurance Ltd.",
            ],
            [
                "securitySymbol" => "NLG",
                "securityName" => "NLG Insurance Company Ltd.",
            ],
            [
                "securitySymbol" => "STC",
                "securityName" => "Salt Trading Corporation",
            ],
            [
                "securitySymbol" => "MNBBL",
                "securityName" => "Muktinath Bikas Bank Ltd.",
            ],
            [
                "securitySymbol" => "CHCL",
                "securityName" => "Chilime Hydropower Company Limited",
            ],
            [
                "securitySymbol" => "HIDCL",
                "securityName" => "Hydorelectricity Investment and Development Company Ltd",
            ],
            [
                "securitySymbol" => "FMDBL",
                "securityName" => "First Micro Finance Development Bank Ltd.",
            ],
            [
                "securitySymbol" => "SWBBL",
                "securityName" => "Swabalamban Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "HBL",
                "securityName" => "Himalayan Bank Limited",
            ],
            [
                "securitySymbol" => "AIL",
                "securityName" => "Ajod Insurance Limited",
            ],
            [
                "securitySymbol" => "BFC",
                "securityName" => "Best Finance Company Ltd.",
            ],
            [
                "securitySymbol" => "UIC",
                "securityName" => "United Insurance Co. (Nepal) Ltd.",
            ],
            [
                "securitySymbol" => "NICL",
                "securityName" => "Nepal Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "CORBL",
                "securityName" => "Corporate Development Bank Limited",
            ],
            [
                "securitySymbol" => "PLIC",
                "securityName" => "Prime Life Insurance Company Limited",
            ],
            [
                "securitySymbol" => "GLICL",
                "securityName" => "Gurans Life Insurance Company Ltd.",
            ],
            [
                "securitySymbol" => "HGI",
                "securityName" => "Himalayan General Insurance Co. Ltd",
            ],
            [
                "securitySymbol" => "PLI",
                "securityName" => "Prabhu Life Insurance Limited",
            ],
            [
                "securitySymbol" => "API",
                "securityName" => "Api Power Company Ltd.",
            ],
            [
                "securitySymbol" => "PIC",
                "securityName" => "Premier Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "RLI",
                "securityName" => "Reliance Life Insurance Limited",
            ],
            [
                "securitySymbol" => "SHINE",
                "securityName" => "Shine Resunga Development Bank Ltd.",
            ],
            [
                "securitySymbol" => "NMFBS",
                "securityName" => "National Microfinance Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "FOWAD",
                "securityName" => "Forward Community Microfinance Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "SLICL",
                "securityName" => "Surya Life Insurance Company Limited",
            ],
            [
                "securitySymbol" => "NHPC",
                "securityName" => "National Hydro Power Company Limited",
            ],
            [
                "securitySymbol" => "KSBBL",
                "securityName" => "Kamana Sewa Bikas Bank Limited",
            ],
            [
                "securitySymbol" => "SLBBL",
                "securityName" => "Swarojgar Laghu Bitta Bikas Bank Ltd.",
            ],
            [
                "securitySymbol" => "SADBL",
                "securityName" => "Shangrila Development Bank Ltd.",
            ],
            [
                "securitySymbol" => "NIBPO",
                "securityName" => "Nepal Investment Bank Ltd. Promoter Share",
            ],
            [
                "securitySymbol" => "MERO",
                "securityName" => "Mero Microfinance Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "RHPL",
                "securityName" => "RASUWAGADHI HYDROPOWER COMPANY LIMITED",
            ],
            [
                "securitySymbol" => "SHPC",
                "securityName" => "Sanima Mai Hydropower Ltd.",
            ],
            [
                "securitySymbol" => "MLBL",
                "securityName" => "Mahalaxmi Bikas Bank Ltd.",
            ],
            [
                "securitySymbol" => "SSHL",
                "securityName" => "Shiva Shree Hydropower Ltd",
            ],
            [
                "securitySymbol" => "SIL",
                "securityName" => "Siddhartha Insurance Ltd.",
            ],
            [
                "securitySymbol" => "KRBL",
                "securityName" => "Karnali Development Bank Limited",
            ],
            [
                "securitySymbol" => "GUFL",
                "securityName" => "Gurkhas Finance Ltd.",
            ],
            [
                "securitySymbol" => "JSLBB",
                "securityName" => "Janautthan Samudayic Laghubitta Bikas Bank Ltd.",
            ],
            [
                "securitySymbol" => "GILB",
                "securityName" => "Global IME Laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "SAPDBL",
                "securityName" => "Saptakoshi Development Bank Ltd",
            ],
            [
                "securitySymbol" => "ICFC",
                "securityName" => "ICFC Finance Limited",
            ],
            [
                "securitySymbol" => "BPCL",
                "securityName" => "Butwal Power Company Limited",
            ],
            [
                "securitySymbol" => "MEN",
                "securityName" => "Mountain Energy Nepal Limited",
            ],
            [
                "securitySymbol" => "PROFL",
                "securityName" => "ProgressiveFinance Limited",
            ],
            [
                "securitySymbol" => "RMDC",
                "securityName" => "RMDC Laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "RSDC",
                "securityName" => "RSDC Laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "EIC",
                "securityName" => "Everest Insurance Co. Ltd.",
            ],
            [
                "securitySymbol" => "GRDBL",
                "securityName" => "Green Development Bank Ltd.",
            ],
            [
                "securitySymbol" => "GIC",
                "securityName" => "General Insurance Company Nepal Ltd",
            ],
            [
                "securitySymbol" => "MFIL",
                "securityName" => "Manjushree Finance Ltd.",
            ],
            [
                "securitySymbol" => "SKBBL",
                "securityName" => "Sana Kisan Bikas Bank Ltd",
            ],
            [
                "securitySymbol" => "SGI",
                "securityName" => "Sanima General Insurance Limited",
            ],
            [
                "securitySymbol" => "NRN",
                "securityName" => "NRN Infrastructure and Development Limited",
            ],
            [
                "securitySymbol" => "UMHL",
                "securityName" => "United Modi Hydropower Ltd.",
            ],
            [
                "securitySymbol" => "SHL",
                "securityName" => "Soaltee Hotel Limited",
            ],
            [
                "securitySymbol" => "KMCDB",
                "securityName" => "Kalika Microcredit Development Bank Ltd.",
            ],
            [
                "securitySymbol" => "SINDU",
                "securityName" => "Sindhu Bikash Bank Ltd",
            ],
            [
                "securitySymbol" => "HURJA",
                "securityName" => "Himalaya Urja Bikas Company Limited",
            ],
            [
                "securitySymbol" => "LEC",
                "securityName" => "Liberty Energy Company Limited",
            ],
            [
                "securitySymbol" => "BARUN",
                "securityName" => "Barun Hydropower Co. Ltd.",
            ],
            [
                "securitySymbol" => "CFCL",
                "securityName" => "Central Finance Co. Ltd.",
            ],
            [
                "securitySymbol" => "SPDL",
                "securityName" => "Synergy Power Development Ltd.",
            ],
            [
                "securitySymbol" => "MSLB",
                "securityName" => "Mahuli Samudayik Laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "ACLBSL",
                "securityName" => "Aarambha Chautari Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "USLB",
                "securityName" => "Unnati Sahakarya Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "GMFBS",
                "securityName" => "Ganapati Microfinance Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "JFL",
                "securityName" => "Janaki Finance Ltd.",
            ],
            [
                "securitySymbol" => "SNLB",
                "securityName" => "Sarathi Nepal Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "SLBS",
                "securityName" => "Suryodaya Laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "PFL",
                "securityName" => "Pokhara Finance Ltd.",
            ],
            [
                "securitySymbol" => "RHPC",
                "securityName" => "Ridi Hydropower Development Company Ltd.",
            ],
            [
                "securitySymbol" => "ILBS",
                "securityName" => "Infinity Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "SMFDB",
                "securityName" => "Summit Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "SJCL",
                "securityName" => "SANJEN JALAVIDHYUT COMPANY LIMITED",
            ],
            [
                "securitySymbol" => "HDHPC",
                "securityName" => "Himal Dolakha Hydropower Company Limited",
            ],
            [
                "securitySymbol" => "NMBMF",
                "securityName" => "NMB  Microfinance Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "MLBBL",
                "securityName" => "Mithila LaghuBitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "MPFL",
                "securityName" => "Multipurpose Finance Company  Limited",
            ],
            [
                "securitySymbol" => "NFS",
                "securityName" => "Nepal Finance Ltd.",
            ],
            [
                "securitySymbol" => "HPPL",
                "securityName" => "Himalayan Power Partner Ltd.",
            ],
            [
                "securitySymbol" => "CLBSL",
                "securityName" => "Civil Laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "MDB",
                "securityName" => "Miteri Development Bank Limited",
            ],
            [
                "securitySymbol" => "RADHI",
                "securityName" => "Radhi Bidyut Company Ltd",
            ],
            [
                "securitySymbol" => "TRH",
                "securityName" => "Taragaon Regency Hotel Limited",
            ],
            [
                "securitySymbol" => "VLBS",
                "securityName" => "Vijaya laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "EDBL",
                "securityName" => "Excel Development Bank Ltd.",
            ],
            [
                "securitySymbol" => "LLBS",
                "securityName" => "Laxmi Laghubitta Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "PPCL",
                "securityName" => "Panchthar Power Compant Limited",
            ],
            [
                "securitySymbol" => "UPCL",
                "securityName" => "UNIVERSAL POWER COMPANY LTD",
            ],
            [
                "securitySymbol" => "KLBSL",
                "securityName" => "Kisan Lagubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "KPCL",
                "securityName" => "Kalika power Company Ltd",
            ],
            [
                "securitySymbol" => "RLFL",
                "securityName" => "Reliance Finance Ltd.",
            ],
            [
                "securitySymbol" => "SMB",
                "securityName" => "Support Microfinance Bittiya Sanstha Ltd.",
            ],
            [
                "securitySymbol" => "OHL",
                "securityName" => "Oriental Hotels Limited",
            ],
            [
                "securitySymbol" => "NGPL",
                "securityName" => "Ngadi Group Power Ltd.",
            ],
            [
                "securitySymbol" => "GFCL",
                "securityName" => "Goodwill Finance Co. Ltd.",
            ],
            [
                "securitySymbol" => "ALBSL",
                "securityName" => "Asha Laghubitta Bittiya Sanstha Ltd",
            ],
            [
                "securitySymbol" => "GLBSL",
                "securityName" => "Gurans Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "SMFBS",
                "securityName" => "Swabhimaan Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "SABSL",
                "securityName" => "SABAIKO LAGHUBITTA BITTIYA SANSTHA LIMITED",
            ],
            [
                "securitySymbol" => "CHL",
                "securityName" => "Chhyangdi Hydropower Ltd.",
            ],
            [
                "securitySymbol" => "MBLPO",
                "securityName" => "MachhaPuchhre  Bank Limited Promotor Share",
            ],
            [
                "securitySymbol" => "GMFIL",
                "securityName" => "Guheshowori Merchant Bank & Finance Co. Ltd.",
            ],
            [
                "securitySymbol" => "SDLBSL",
                "securityName" => "Sadhana Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "UNHPL",
                "securityName" => "Union Hydropower Limited",
            ],
            [
                "securitySymbol" => "UNL",
                "securityName" => "Unilever Nepal Limited",
            ],
            [
                "securitySymbol" => "SIFC",
                "securityName" => "Shree Investment Finance Co. Ltd.",
            ],
            [
                "securitySymbol" => "NHDL",
                "securityName" => "Nepal Hydro Developers Ltd.",
            ],
            [
                "securitySymbol" => "AKJCL",
                "securityName" => "Ankhu Khola Jalvidhyut Company Ltd",
            ],
            [
                "securitySymbol" => "UFL",
                "securityName" => "United Finance Ltd.",
            ],
            [
                "securitySymbol" => "SLBSL",
                "securityName" => "Samudayik Laghubitta Bittiya Sanstha Limited",
            ],
            [
                "securitySymbol" => "EICPO",
                "securityName" => "Everest Insurance Co. Ltd. Promoter Share",
            ],
            [
                "securitySymbol" => "MHNL",
                "securityName" => "Mountain Hydro Nepal Limited",
            ],
            [
                "securitySymbol" => "RRHP",
                "securityName" => "Rairang Hydropower Development Company Ltd.",
            ],
            [
                "securitySymbol" => "BNT",
                "securityName" => "Bottlers Nepal (Terai) Limited",
            ],
            [
                "securitySymbol" => "DHPL",
                "securityName" => "Dibyashwori Hydropower Ltd.",
            ],
            [
                "securitySymbol" => "PMHPL",
                "securityName" => "Panchakanya Mai Hydropower Ltd",
            ],
            [
                "securitySymbol" => "MLBLPO",
                "securityName" => "Mahalxmi Bikas Bank Ltd. Promotor Share",
            ],
            [
                "securitySymbol" => "NABBC",
                "securityName" => "Narayani Development Bank Limited",
            ],
            [
                "securitySymbol" => "JOSHI",
                "securityName" => "Joshi Hydropower Development Company Ltd",
            ],
            [
                "securitySymbol" => "KKHC",
                "securityName" => "Khanikhola Hydropower Co. Ltd.",
            ],
            [
                "securitySymbol" => "UMRH",
                "securityName" => "United IDI Mardi RB Hydropower Limited.",
            ],
            [
                "securitySymbol" => "GHL",
                "securityName" => "Ghalemdi Hydro Limited",
            ],
            [
                "securitySymbol" => "CGH",
                "securityName" => "Chandragiri Hills Limited",
            ]
        ];

        foreach ($stocks as $stock) {
            Stock::create([
                'symbol' => $stock['securitySymbol'],
                'name' => $stock['securityName'],
            ]);
        }

    }
}
