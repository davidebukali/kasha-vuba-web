 
SELECT 
(SELECT 
       CASE 
    WHEN COUNT(1) = 0 THEN 'NOT AVAILABLE'
    ELSE meta_value
END 
FROM `wp_postmeta`
    WHERE meta_key = '_wc_acof_29' AND post_id = ID
) AS ebm_id,
(SELECT 
    CASE 
    WHEN COUNT(1) = 0 THEN  'NOT AVAILABLE'
    ELSE DATE_FORMAT(FROM_UNIXTIME(meta_value), '%Y-%m-%d')
               END
FROM `wp_postmeta`
    WHERE meta_key = '_wc_acof_28' AND post_id = ID
) AS ebm_date,
ID as order_id
FROM wp_posts 
WHERE 
  post_type = 'shop_order' AND 
  date(post_date) >= '2017-06-01' AND
  post_status IN
(SELECT 
     sub_status_name
    FROM
    kasha_order_status_meta 
    LEFT JOIN 
     kasha_order_sub_status_meta
    ON kasha_order_status_meta.id = kasha_order_sub_status_meta.parent_status_id
    WHERE status_name IN ('returned','fulfilled'));