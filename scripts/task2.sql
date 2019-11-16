INSERT INTO send_log_aggregated (
          usr_id,
          cnt_id,
          log_created
        )
SELECT
  usr_id,
  c.id,
  FROM_UNIXTIME(log_created, '%Y-%m-%d') as log_created
FROM
  send_log sl
INNER JOIN numbers n on sl.num_id = n.id
INNER JOIN countries c on n.cnt_id = c.id
ORDER BY usr_id, log_created;