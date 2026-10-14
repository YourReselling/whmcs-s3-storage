# S3 Storage

Bestellung: `POST /products/s3-storage/order`. ID: `data.id`.

Kundenfelder: keine.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `friendly_name` | string | Ja | required; string; max:255 |
| `size_gb` | integer | Ja | required; integer; min:500; max:20000 |
| `autoscaling_enabled` | boolean | Nein | boolean |
| `autoscaling_lower_threshold` | integer | Nein | nullable; integer; min:0; max:100 |
| `autoscaling_scale_up_only` | boolean | Nein | boolean |
| `autoscaling_upper_threshold` | integer | Nein | nullable; integer; min:0; max:100 |
| `location_id` | string | Nein | Location UUID, oder null für Auto-Select |
| `speed_mbps` | integer | Nein | Bandbreitenlimit in Mbit/s |

API-Key-Rechte für alle Modulansichten und Aktionen: `s3-storage:create`, `s3-storage:delete`, `s3-storage:read`.

Verwaltungsaktionen: Produktübersicht und Zugangsdaten.

Hinweise:
- size_gb 500..20000; optional location_id, automatic cheapest active location otherwise
- No suspend/unsuspend endpoint
